<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Seguimiento;
use App\Cliente;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SeguimientoController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        

         $seguimientos = Seguimiento::with(['cliente'])
         ->orderBy('cliente_id','ASC')   
         ->orderBy('fecha','DESC') 
         ->paginate(15);

         //dd($seguimientos);

         $registros= Seguimiento::count();

        return view('seguimientos.index')->with(compact('seguimientos','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::pluck('razon_social','id');
        return view('seguimientos.create',compact('clientes'));
    }
    
    public function store(Request $request)
    {
         $seguimientos = new Seguimiento($request->all());
         $seguimientos->comentarios = $request->comentarios;
         $seguimientos->tipo_seguimiento = $request->tipo_seguimiento;
         $seguimientos->fecha = Carbon::now();
         $seguimientos->usuario_id = auth()->user()->id;
         
         $seguimientos->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $seguimientos= Seguimiento::find($id);
        $clientes=Cliente::pluck('razon_social','id');

        return view('seguimientos.edit',compact('seguimientos','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        $seguimientos =Seguimiento::find($id);

   
        $seguimientos->fill($request->all());
        $seguimientos->save();

       
        return redirect()->route('seguimientos.index');
    }
    
    public function destroy($id)
    {
        $seguimientos = Seguimiento::findOrfail($id);

        $seguimientos->delete();
           
       return redirect(route('seguimientos.index'));
    }
}
