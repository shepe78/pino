<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 

use App\Empleado;
use App\Empresa;
use App\Cliente;
use Storage;
use DB;
use Carbon\Carbon;

use Laracasts\Flash\Flash;

class EmpleadoController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        $empleados= Empleado::with(['cliente','empresa'])->nombre($request->get('nombre'))
         ->orderBy('nombre','ASC')   
         ->paginate(3000);
       
        
         $registros= Empleado::count();


        //dd($empleados);

        return view('empleados.index')->with(compact('empleados','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::pluck('razon_social','id');
       

        return view('empleados.create',compact('clientes'));
    }
    
    
    public function store(Request $request)
    {
         
         $empleado = new Empleado($request->all());

         $empleado->cliente_id = $request->cliente_id;
         
         if($request->hasfile('acta_nacimiento')){
            $file1=$request->file('acta_nacimiento');
            $extencion =$file1->getClientOriginalName();
            $name1 = $empleado->empleado_id.'-acta-nacimiento'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $empleado->acta_nacimiento= $name1;            
        }
       
        if($request->hasfile('comprobante_domicilio')){

            $file5=$request->file('comprobante_domicilio');
            $extencion =$file5->getClientOriginalName();
            $name5 =$empleado->empleado_id.'-comprobante-domicilio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name5, file_get_contents($file5->getRealPath()));
            $empleado->comprobante_domicilio= $name5;            
        }       

        if($request->hasfile('identificacion')){

            $file7=$request->file('identificacion');
            $extencion =$file7->getClientOriginalName();
            $name7 =$empleado->cliente_id.'-identificacion-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name7, file_get_contents($file7->getRealPath()));
            $empleado->identificacion= $name7;            
        }

        
        
         $empleado->save();       

        return back()->with('message', ['success', "Registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $empleado= Empleado::find($id);

        $clientes=Cliente::pluck('razon_social','id');        

        return view('empleados.edit',compact('empleado','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        
         $empleado =Empleado::find($id);
         
         $empleado->fill($request->all());

         $empleado->cliente_id = $id;
      

           
        if($request->hasfile('acta_nacimiento')){
            $file1=$request->file('acta_nacimiento');
            $extencion =$file1->getClientOriginalName();
            $name1 = $empleado->empleado_id.'-acta-nacimiento'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $empleado->acta_nacimiento= $name1;            
        }
       
        if($request->hasfile('comprobante_domicilio')){

            $file5=$request->file('comprobante_domicilio');
            $extencion =$file5->getClientOriginalName();
            $name5 =$empleado->empleado_id.'-comprobante-domicilio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name5, file_get_contents($file5->getRealPath()));
            $empleado->comprobante_domicilio= $name5;            
        }       

        if($request->hasfile('identificacion')){

            $file7=$request->file('identificacion');
            $extencion =$file7->getClientOriginalName();
            $name7 =$empleado->cliente_id.'-identificacion-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name7, file_get_contents($file7->getRealPath()));
            $empleado->identificacion= $name7;            
        }         
         

        $empleado->save();
       
        return redirect()->route('empleados.index');
    }
    
    public function destroy($id)
    {
        $empleado = Empleado::findOrfail($id);

        $empleado->delete();
           
       return redirect(route('empleados.index'));
    }
}
