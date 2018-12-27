<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Colaborador;
use App\Plaza;
use Laracasts\Flash\Flash;

class ColaboradorController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        

         $colaboradores= Colaborador::with(['plaza'])->nombre($request->get('nombre'))
         ->orderBy('nombre','ASC')   
         ->paginate(1000);

         $registros= Colaborador::count();

        return view('colaboradores.index')->with(compact('colaboradores','registros','plazas'));
    }
   
    public function create()
    {
        $plazas=Plaza::pluck('descripcion','id');
        return view('colaboradores.create',compact('plazas'));
    }
    
    public function store(Request $request)
    {
         $colaborador = new Colaborador($request->all());
         $colaborador->nombre = $request->nombre;
         // $colaborador->domicilio = $request->domicilio;
         $colaborador->telefono = $request->telefono;
         $colaborador->email = $request->email;
         $colaborador->tipo_colaborador = $request->tipo_colaborador;
         $colaborador->status = $request->status;
         $colaborador->plaza_id = $request->plaza_id;
         $colaborador->celular = $request->celular;
         $colaborador->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $colaborador= Colaborador::find($id);
        $plazas=Plaza::pluck('descripcion','id');

        return view('colaboradores.edit',compact('colaborador','plazas'));
        
    }
   
    public function update(Request $request, $id)
    {
        $colaborador =Colaborador::find($id);

   
        $colaborador->fill($request->all());
       
        $colaborador->save();

       
        return redirect()->route('colaboradores.index');
    }
    
    public function destroy($id)
    {
        $colaborador = Colaborador::findOrfail($id);

        $colaborador->delete();
           
       return redirect(route('colaboradores.index'));
    }
}
