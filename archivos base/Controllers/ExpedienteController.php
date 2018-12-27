<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 

use App\Expediente;
use App\Empresa;
use App\Cliente;
use Storage;
use DB;
use Carbon\Carbon;

use Laracasts\Flash\Flash;

class ExpedienteController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        $expedientes=DB::table('expedientes as e')
        ->join('clientes as c','c.id','=','e.cliente_id')
        ->select('e.id as id','c.id as id_cliente','c.razon_social as razon_social')
        ->orderBy('c.id','ASC')            
        ->get();
       
        $expedientes2= Expediente::with(['cliente'])->id($request->get('id'))
        ->orderBy('cliente_id','ASC')       
        ->paginate(5000);

         $registros= Expediente::count();


        //dd($expedientes);

        return view('expedientes.index')->with(compact('expedientes','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::pluck('razon_social','id');
       

        return view('expedientes.create',compact('clientes'));
    }
    
    public function store(Request $request)
    {
         
         $expediente = new Expediente($request->all());

         $expediente->cliente_id = $request->cliente_id;
         
         if($request->hasfile('acta_nacimiento')){
            $file1=$request->file('acta_nacimiento');
            $extencion =$file1->getClientOriginalName();
            $name1 = $expediente->cliente_id.'-acta-nacimiento'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $expediente->acta_nacimiento= $name1;            
        }


        if($request->hasfile('cedula_rfc')){

            $file2=$request->file('cedula_rfc');
            $extencion =$file2->getClientOriginalName();
            $name2 =$expediente->cliente_id.'-cedula-rfc-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name2, file_get_contents($file2->getRealPath()));
            $expediente->cedula_rfc= $name2;            
        }

        if($request->hasfile('cuestionario')){

            $file3=$request->file('cuestionario');
            $extencion =$file3->getClientOriginalName();
            $name3 =$expediente->cliente_id.'-cuestionario-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name3, file_get_contents($file3->getRealPath()));
            $expediente->cuestionario= $name3;            
        }

        if($request->hasfile('acta_constitutiva')){

            $file4=$request->file('acta_constitutiva');
            $extencion =$file4->getClientOriginalName();
            $name4 =$expediente->cliente_id.'-acta-constitutiva-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name4, file_get_contents($file4->getRealPath()));
            $expediente->acta_constitutiva= $name4;            
        }

        if($request->hasfile('comprobante_domicilio')){

            $file5=$request->file('comprobante_domicilio');
            $extencion =$file5->getClientOriginalName();
            $name5 =$expediente->cliente_id.'-comprobante-domicilio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name5, file_get_contents($file5->getRealPath()));
            $expediente->comprobante_domicilio= $name5;            
        }
        if($request->hasfile('curp')){

            $file6=$request->file('curp');
            $extencion =$file6->getClientOriginalName();
            $name6 =$expediente->cliente_id.'-curp-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name6, file_get_contents($file6->getRealPath()));
            $expediente->curp= $name6;            
        }

        if($request->hasfile('identificacion')){

            $file7=$request->file('identificacion');
            $extencion =$file7->getClientOriginalName();
            $name7 =$expediente->cliente_id.'-identificacion-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name7, file_get_contents($file7->getRealPath()));
            $expediente->identificacion= $name7;            
        }

        if($request->hasfile('poder_notarial')){

            $file8=$request->file('poder_notarial');
            $extencion =$file8->getClientOriginalName();
            $name8 =$expediente->cliente_id.'-poder-notarial-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name8, file_get_contents($file8->getRealPath()));
            $expediente->poder_notarial= $name8;            
        }

        if($request->hasfile('documento_migratorio')){

            $file9=$request->file('documento_migratorio');
            $extencion =$file9->getClientOriginalName();
            $name9 =$expediente->cliente_id.'-documento-migratorio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name9, file_get_contents($file9->getRealPath()));
            $expediente->documento_migratorio= $name9;            
        }
        
        
         $expediente->save();       

        return back()->with('message', ['success', "Registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $expediente= Expediente::find($id);

        $clientes=Cliente::pluck('razon_social','id');        

        return view('expedientes.edit',compact('expediente','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        
         $expediente =Expediente::find($id);
         
         $expediente->fill($request->all());

         $expediente->cliente_id = $id;
      

           
        if($request->hasfile('acta_nacimiento')){
            $file1=$request->file('acta_nacimiento');
            $extencion =$file1->getClientOriginalName();
            $name1 = $expediente->cliente_id.'-acta-nacimiento'.'-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name1, file_get_contents($file1->getRealPath()));
            $expediente->acta_nacimiento= $name1;            
        }
       

        if($request->hasfile('cedula_rfc')){

            $file2=$request->file('cedula_rfc');
            $extencion =$file2->getClientOriginalName();
            $name2 =$expediente->cliente_id.'-cedula-rfc-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name2, file_get_contents($file2->getRealPath()));
            $expediente->cedula_rfc= $name2;            
        }

        if($request->hasfile('cuestionario')){

            $file3=$request->file('cuestionario');
            $extencion =$file3->getClientOriginalName();
            $name3 =$expediente->cliente_id.'-cuestionario-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name3, file_get_contents($file3->getRealPath()));
            $expediente->cuestionario= $name3;            
        }

        if($request->hasfile('acta_constitutiva')){

            $file4=$request->file('acta_constitutiva');
            $extencion =$file4->getClientOriginalName();
            $name4 =$expediente->cliente_id.'-acta-constitutiva-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name4, file_get_contents($file4->getRealPath()));
            $expediente->acta_constitutiva= $name4;            
        }

        if($request->hasfile('comprobante_domicilio')){

            $file5=$request->file('comprobante_domicilio');
            $extencion =$file5->getClientOriginalName();
            $name5 =$expediente->cliente_id.'-comprobante-domicilio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name5, file_get_contents($file5->getRealPath()));
            $expediente->comprobante_domicilio= $name5;            
        }
        if($request->hasfile('curp')){

            $file6=$request->file('curp');
            $extencion =$file6->getClientOriginalName();
            $name6 =$expediente->cliente_id.'-curp-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name6, file_get_contents($file6->getRealPath()));
            $expediente->curp= $name6;            
        }

        if($request->hasfile('identificacion')){

            $file7=$request->file('identificacion');
            $extencion =$file7->getClientOriginalName();
            $name7 =$expediente->cliente_id.'-identificacion-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name7, file_get_contents($file7->getRealPath()));
            $expediente->identificacion= $name7;            
        }

        if($request->hasfile('poder_notarial')){

            $file8=$request->file('poder_notarial');
            $extencion =$file8->getClientOriginalName();
            $name8 =$expediente->cliente_id.'-poder-notarial-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name8, file_get_contents($file8->getRealPath()));
            $expediente->poder_notarial= $name8;            
        }

        if($request->hasfile('documento_migratorio')){

            $file9=$request->file('documento_migratorio');
            $extencion =$file9->getClientOriginalName();
            $name9 =$expediente->cliente_id.'-documento-migratorio-'.time().'-'.$extencion;
            Storage::disk('expedientesf')->put($name9, file_get_contents($file9->getRealPath()));
            $expediente->documento_migratorio= $name9;            
        }         
         

        $expediente->save();
       
        return redirect()->route('expedientes.index');
    }
    
    public function destroy($id)
    {
        $expediente = Expediente::findOrfail($id);

        $expediente->delete();
           
       return redirect(route('expedientes.index'));
    }
}
