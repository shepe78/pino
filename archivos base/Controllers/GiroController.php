<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Giro;
use Laracasts\Flash\Flash;

class GiroController extends Controller
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

         $giros= Giro::descripcion($request->get('descripcion'))
         ->orderBy('descripcion','ASC')
         ->paginate(100);

         $registros= Giro::count();

        return view('giros.index')->with(compact('giros','registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('giros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $giro = new Giro($request->all());
         $giro->descripcion = $request->descripcion;
         $giro->save();       

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
 
        $giro= Giro::find($id);

        return view('giros.edit',compact('giro'));

        
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
        $giro =Giro::find($id);

   
        $giro->fill($request->all());
        $giro->save();

       
        return redirect()->route('giros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $giro = Giro::findOrfail($id);

        $giro->delete();
           
       return redirect(route('giros.index'));
    }
}
