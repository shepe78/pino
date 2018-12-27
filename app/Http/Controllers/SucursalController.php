<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Sucursal;
use Laracasts\Flash\Flash;

class SucursalController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index( Request $request)
    {
         $registros = Sucursal::count();
         
         $sucursales= Sucursal::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(15);
         

        return view('sucursales.index')->with(compact('sucursales','registros'));
    }

    
    public function create()
    {
        return view('sucursales.create');
    }

   
    public function store(Request $request)
    {
         $sucursal = new Sucursal($request->all());
         $sucursal->descripcion = $request->descripcion;
         $sucursal->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);     
   
    }
        
    public function edit($id)
    {
 
        $sucursal= Sucursal::find($id);
        return view('sucursales.edit',compact('sucursal'));
        
    }

    public function show($id)
    {
 
        
    }

    
    public function update(Request $request, $id)
    {
        $sucursal =Sucursal::find($id);   
        $sucursal->fill($request->all());
        $sucursal->save();
       
        return redirect()->route('sucursales.index');
    }

    
    public function destroy($id)
    {
        $sucursal = Sucursal::findOrfail($id);
        $sucursal->delete();           
       return redirect(route('sucursales.index'));
    }
}