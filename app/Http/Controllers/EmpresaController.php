<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Empresa;
use App\Plaza;
use Laracasts\Flash\Flash;

class EmpresaController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {
        
        $plazas = Plaza::pluck('descripcion','id');

         $empresas= Empresa::with(['plaza'])
         ->razon_social($request->get('razon_social'))
         ->plaza($request->get('plaza_id'))
         ->tipo_empresa($request->get('tipo'))
         ->orderBy('razon_social','ASC')   
         ->paginate(15);

          $registros= Empresa::count();

        return view('empresas.index')->with(compact('empresas','plazas','registros'));
    }
   
    public function create()
    {
        $plazas=Plaza::pluck('descripcion','id');
        return view('empresas.create',compact('plazas'));
    }
    
    public function store(Request $request)
    {
         $empresa = new Empresa($request->all());
         $empresa->razon_social = $request->razon_social;
         $empresa->rfc = $request->rfc;
         $empresa->domicilio = $request->domicilio;
         $empresa->tipo_empresa = $request->tipo_empresa;
         $empresa->status = $request->status;
         $empresa->plaza_id = $request->plaza_id;
         $empresa->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $empresa= Empresa::find($id);
        $plazas=Plaza::pluck('descripcion','id');

        return view('empresas.edit',compact('empresa','plazas'));
        
    }
   
    public function update(Request $request, $id)
    {
        $empresa =Empresa::find($id);

   
        $empresa->fill($request->all());
        $empresa->save();

       
        return redirect()->route('empresas.index');
    }
    
    public function destroy($id)
    {
        $empresa = Empresa::findOrfail($id);

        $empresa->delete();
           
       return redirect(route('empresas.index'));
    }
}
