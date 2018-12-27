<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Grupo;
use Laracasts\Flash\Flash;

class GrupoController extends Controller
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

         $grupos= Grupo::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(12);

         $registros= Grupo::count();



         return view('grupos.index')->with(compact('grupos','registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $grupo = new Grupo($request->all());
         $grupo->descripcion = $request->descripcion;
         $grupo->save();       

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
 
        $grupo= Grupo::find($id);

        return view('grupos.edit',compact('grupo'));

        
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
        $grupo =Grupo::find($id);

   
        $grupo->fill($request->all());
        $grupo->save();

       
        return redirect()->route('grupos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = Grupo::findOrfail($id);

        $grupo->delete();
           
       return redirect(route('grupos.index'));
    }
}
