<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Informe;
use App\Empresa;
use App\Cliente;
use App\Esquema;
use Storage;

use DB;
use Carbon\Carbon;

use Laracasts\Flash\Flash;

class InformeController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        $informes= Informe::with(['cliente','empresa'])->id($request->get('id'))
        ->orderBy('id','DESC')   
        ->paginate(10000);

         $registros= Informe::count();

        ///dd($informes);


        return view('informes.index')->with(compact('informes','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::orderBy('razon_social','ASC')->pluck('razon_social','id');
        $empresas=Empresa::orderBy('razon_social','ASC')->pluck('razon_social','id');
        

        return view('informes.create',compact('clientes','empresas'));
    }
    
    public function store(Request $request)
    {
         $informe = new Informe($request->all());

         $informe->cliente_id = $request->cliente_id;
         $informe->empresa_id = $request->empresa_id;
         $informe->ejercicio = $request->ejercicio;   
         $informe->periodo = $request->periodo;
         $informe->concepto = $request->concepto;     
         $informe->status = $request->status;         
         $informe->importe_pesos = $request->importe_pesos;
         $informe->importe_dolares = $request->importe_dolares;


         if($request->hasfile('facturacion')){
            $file1=$request->file('facturacion');
            $extencion =$file1->getClientOriginalName();
            $name1 = $informe->cliente_id.'-facturacion'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $informe->facturacion= $name1;
        }      

         if($request->hasfile('informepdf')){
            $file2=$request->file('informepdf');
            $extencion =$file2->getClientOriginalName();
            $name2 = $informe->cliente_id.'-'.$informe->ejercicio.$informe->periodo.'-informepdf'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name2, file_get_contents($file2->getRealPath()));
            $informe->informepdf= $name2;              
        }

        

         
         $informe->save();       

        return back()->with('message', ['success', "Registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $informe= Informe::find($id);

        $clientes=Cliente::orderBy('razon_social','ASC')->pluck('razon_social','id');
        $empresas=Empresa::orderBy('razon_social','ASC')->pluck('razon_social','id');

        return view('informes.edit',compact('informe','empresas','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        $informe =Informe::find($id);

   
        $informe->fill($request->all());
        $informe->cliente_id = $request->cliente_id;
        $informe->empresa_id = $request->empresa_id;

        if($request->hasfile('facturacion')){
            $file1=$request->file('facturacion');
            $extencion =$file1->getClientOriginalName();
            $name1 = $informe->cliente_id.'-facturacion'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $informe->facturacion= $name1; 
        }    

            if($request->hasfile('informepdf')){
            $file2=$request->file('informepdf');
            $extencion =$file2->getClientOriginalName();
            $name2 = $informe->cliente_id.'-'.$informe->ejercicio.$informe->periodo.'-informepdf'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name2, file_get_contents($file2->getRealPath()));
            $informe->informepdf= $name2;           
        }



        $informe->save();

       
        return back()->with('message', ['success', "registro actualizado correctamente"]);
    }
    
    public function destroy($id)
    {
        $informe = Informe::findOrfail($id);

        $informe->delete();
           
       return redirect(route('informes.index'));
    }




}
