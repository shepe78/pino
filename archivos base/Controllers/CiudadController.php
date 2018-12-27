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

         $ciudades= Ciudad::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(100);

         $registros= Ciudad::count();

        return view('ciudades.index')->with(compact('ciudades','registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $ciudad = new Ciudad($request->all());
         $ciudad->descripcion = $request->descripcion;
         $ciudad->save();       

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
 
        $ciudad= Ciudad::find($id);

        return view('ciudades.edit',compact('ciudad'));

        
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
        $ciudad =Ciudad::find($id);

   
        $ciudad->fill($request->all());
        $ciudad->save();

       
        return redirect()->route('ciudades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::findOrfail($id);

        $ciudad->delete();
           
       return redirect(route('ciudades.index'));
    }
}
