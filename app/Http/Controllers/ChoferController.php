<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Chofer;
use Laracasts\Flash\Flash;

class ChoferController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index( Request $request)
    {
         $registros = Chofer::count();
         
         $choferes= Chofer::nombre($request->get('nombre'))
         ->orderBy('nombre','ASC')
         ->paginate(15);
         

        return view('choferes.index')->with(compact('choferes','registros'));
    }

    
    public function create()
    {
        return view('choferes.create');
    }

   
    public function store(Request $request)
    {
         $chofer = new Chofer($request->all());
         $chofer->nombre = $request->nombre;
         $chofer->status = 'Activo';
         $chofer->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);     
   
    }
        
    public function edit($id)
    {
 
        $chofer= Chofer::find($id);
        return view('choferes.edit',compact('chofer'));
        
    }

    public function show($id)
    {
 
        
    }

    
    public function update(Request $request, $id)
    {
        $chofer =Chofer::find($id);   
        $chofer->fill($request->all());
        $chofer->save();
       
        return redirect()->route('choferes.index');
    }

    
    public function destroy($id)
    {
        $chofer = Chofer::findOrfail($id);
        $chofer->delete();           
       return redirect(route('choferes.index'));
    }
}
