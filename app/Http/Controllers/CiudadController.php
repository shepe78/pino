<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Ciudad;
use Laracasts\Flash\Flash;

class CiudadController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index( Request $request)
    {
         $registros = Ciudad::count();
         
         $ciudades= Ciudad::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(15);
         

        return view('ciudades.index')->with(compact('ciudades','registros'));
    }

    
    public function create()
    {
        return view('ciudades.create');
    }

   
    public function store(Request $request)
    {
         $ciudad = new Ciudad($request->all());
         $ciudad->descripcion = $request->descripcion;
         $ciudad->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);     
   
    }
        
    public function edit($id)
    {
 
        $ciudad= Ciudad::find($id);
        return view('ciudades.edit',compact('ciudad'));
        
    }

    public function show($id)
    {
 
        
    }

    
    public function update(Request $request, $id)
    {
        $ciudad =Ciudad::find($id);   
        $ciudad->fill($request->all());
        $ciudad->save();
       
        return redirect()->route('ciudades.index');
    }

    
    public function destroy($id)
    {
        $ciudad = Ciudad::findOrfail($id);
        $ciudad->delete();           
       return redirect(route('ciudades.index'));
    }
}
