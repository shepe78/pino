<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Producto;
use Laracasts\Flash\Flash;

class ProductoController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index( Request $request)
    {
         $registros = Producto::count();
         
         $productos= Producto::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(15);
         

        return view('productos.index')->with(compact('productos','registros'));
    }

    
    public function create()
    {
        return view('productos.create');
    }

   
    public function store(Request $request)
    {
         $producto = new Producto($request->all());
         $producto->descripcion = $request->descripcion;
         $producto->codigo = $request->codigo;
         $producto->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);     
   
    }
        
    public function edit($id)
    {
 
        $producto= Producto::find($id);
        return view('productos.edit',compact('producto'));
        
    }

    public function show($id)
    {
 
        
    }

    
    public function update(Request $request, $id)
    {
        $producto =Producto::find($id);   
        $producto->fill($request->all());
        $producto->save();
       
        return redirect()->route('productos.index');
    }

    
    public function destroy($id)
    {
        $producto = Producto::findOrfail($id);
        $producto->delete();           
       return redirect(route('productos.index'));
    }
}
