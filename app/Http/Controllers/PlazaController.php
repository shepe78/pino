<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Plaza;
use Laracasts\Flash\Flash;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');


    }

    public function index( Request $request)
    {

         $plazas= Plaza::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(15);

         $registros= Plaza::count();

        return view('plazas.index')->with(compact('plazas','registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plazas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $plazas = new Plaza($request->all());
         $plazas->descripcion = $request->descripcion;
         $plazas->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
        
       //dd(request()->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
        $plaza= Plaza::find($id);

        return view('plazas.edit',compact('plaza'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plaza =Plaza::find($id);

   
        $plaza->fill($request->all());
        $plaza->save();

       
        return redirect()->route('plazas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plaza = Plaza::findOrfail($id);

        $plaza->delete();
           
       return redirect(route('plazas.index'));
    }
}
