<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 


use App\Esquema;
use App\Empresa;
use App\Cliente;
use Storage;

use DB;
use Carbon\Carbon;

use Laracasts\Flash\Flash;

class EsquemaController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        // $esquemas=DB::table('esquemas as e')
        // ->join('clientes as c','c.id','=','e.cliente_id')
        // ->join('empresas as c','c.id','=','e.facturadora_id')
        // ->select('e.id as id','c.razon_social as razon_social')            
        // ->get();
        $esquemas= Esquema::with(['cliente','facturadora'])->id($request->get('id'))
        ->orderBy('id','DESC')
        ->paginate(2000);   
                
        $registros= Esquema::count();        

        return view('esquemas.index')->with(compact('esquemas','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::orderBY('razon_social','ASC')->pluck('razon_social','id');
        $empresas=Empresa::orderBy('razon_social','ASC')->pluck('razon_social','id');

        return view('esquemas.create',compact('clientes','empresas'));
    }
    
    public function store(Request $request)
    {
         $esquema = new Esquema($request->all());

         $esquema->cliente_id = $request->cliente_id;
         $esquema->facturadora_id = $request->facturadora_id;
         $esquema->pagadora_id = $request->pagadora_id;
         $esquema->fecha_inicio = $request->fecha_inicio;         
         $esquema->periodicidad = $request->periodicidad;
         $esquema->concepto = $request->concepto;
         $esquema->status = $request->status;
         $esquema->producto = $request->producto;
         $esquema->comision = $request->comision;       
         

         if($request->hasfile('contrato')){
            $file1=$request->file('contrato');
            $extencion =$file1->getClientOriginalName();
            $name1 = $esquema->cliente_id.'-contrato'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $esquema->contrato= $name1;            
        }
        
        
         $esquema->save();       

        return back()->with('message', ['success', "Registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $esquema= Esquema::find($id);

        $empresas=Empresa::orderBy('razon_social','ASC')->pluck('razon_social','id');
        $clientes=Cliente::pluck('razon_social','id');

        return view('esquemas.edit',compact('esquema','empresas','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
         $esquema =Esquema::find($id);
          
         $esquema->fill($request->all());

         $esquema->cliente_id = $request->cliente_id;
         $esquema->producto = $request->producto;

            
         
         if($request->hasfile('contrato')){
                    $file1=$request->file('contrato');
                    $extencion =$file1->getClientOriginalName();
                    $name1 = $esquema->cliente_id.'-contrato'.'-'.time().'-'.$extencion;
                    Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
                    $esquema->contrato= $name1;            
                }

        //dd$esquema);        
        $esquema->save();

       
        //return redirect()->route('esquemas.index');
        return back();
    }
    
    public function destroy($id)
    {
        $esquema = Esquema::findOrfail($id);

        $esquema->delete();
           
        return back()->with('message', ['danger', "Registro eliminado correctamente"]);
    }




   
}
