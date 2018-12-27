<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Contacto;
use App\Cliente;
use Laracasts\Flash\Flash;

class ContactoController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        

         $contactos= Contacto::with(['cliente'])->nombre($request->get('nombre'))
         ->orderBy('nombre','ASC')   
         ->paginate(500);

         $registros= Contacto::count();

        return view('contactos.index')->with(compact('contactos','registros','clientes'));
    }
   
    public function create()
    {
        $clientes=Cliente::orderBy('razon_social','ASC')->pluck('razon_social','id');
        return view('contactos.create',compact('clientes'));
    }
    
    public function store(Request $request)
    {
         $contacto = new Contacto($request->all());
         $contacto->nombre = $request->nombre;
         $contacto->puesto = $request->puesto;
         $contacto->telefono = $request->telefono;
         $contacto->email = $request->email;
         
         $contacto->status = $request->status;
         $contacto->cliente_id = $request->cliente_id;
         
         $contacto->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $contacto= Contacto::find($id);
        $clientes=Cliente::pluck('razon_social','id');

        return view('contactos.edit',compact('contacto','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        $contacto =Contacto::find($id);
   
        $contacto->fill($request->all());
        $contacto->save();

       
        return redirect()->route('contactos.index');
    }
    
    public function destroy($id)
    {
        $contacto = Contacto::findOrfail($id);

        $contacto->delete();
           
       return redirect(route('contactos.index'));
    }
}
