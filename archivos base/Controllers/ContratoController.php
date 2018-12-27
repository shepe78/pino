<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Cliente;
use App\Empresa;
use App\Contrato;
use Carbon\Carbon;
use DB;

class ContratoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        Carbon::setLocale('es');


    }

     public function index()
    {   
       
       $cliente = Cliente::orderBy('razon_social','DESC')->pluck('razon_social','id');
       $empresa = Empresa::orderBy('razon_social','DESC')->pluck('razon_social','id');
        

        $contratos = Contrato::all();

        $solicitados = Contrato::where('status','solicitado')->get();      
        $rechazados = Contrato::where('status','rechazado')->get();
        $validados = Contrato::where('status','validado')->get();
        $liberados = Contrato::where('status','liberado')->get();
        $enfirmarl = Contrato::where('status','enfirmarl')->get();
        $firmadosrl = Contrato::where('status','firmadorl')->get();              
        $enfirmacl = Contrato::where('status','enfirmacl')->get();
        $firmadoscl = Contrato::where('status','firmadocl')->get();

     

        return view ('contratos.index')->with(compact(
            'contratos',            
            'solicitados',
            'rechazados',
            'validados',
            'liberados',
            'enfirmarl',
            'firmadosrl',
            'enfirmacl',
            'firmadoscl',
            'cliente',
            'empresa'
        ));

    }        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::pluck('razon_social','id');
        $empresas= Empresa::pluck('razon_social','id');

         return view ('contratos.create')->with(compact('clientes','empresas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $fecha_reg= Carbon::now();
        $contrato= new Contrato;


        $contrato->id_cliente=$request->get('id_cliente');
        $contrato->facturadora_id=$request->get('facturadora_id');
        $contrato->concepto=$request->get('concepto');
        $contrato->f_registro=$fecha_reg;
        $contrato->status='solicitado';

         
        $contrato->save();
        return Redirect::to('contratos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrato= Contrato::find($id);

        return view('contratos.show')->with(compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $clientes = Cliente::orderBy('razon_social','DESC')->pluck('razon_social','id');
        $empresas = Empresa::orderBy('razon_social','DESC')->pluck('razon_social','id');
        $contrato=Contrato::Find($id);       

        return view('contratos.edit')->with(compact('clientes','empresas','contrato'));
        


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
        $cliente= new Cliente($request->all());
        $contrato =Contrato::find($id);
        $contrato->cliente_id = $request->cliente_id;
        $contrato->facturadora_id = $request->facturadora_id;
        $contrato->concepto = $request->concepto;
        $contrato->save();

        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();
        return redirect::back();

    }


    public function reenviar(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->f_reenvio= $fecha;
        $contrato->status='solicitado';

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }

        public function rechazar(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->f_rechazo= $fecha;
        $contrato->status='rechazado';
        $contrato->motivo_rechazo=$request->motivo_rechazo;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


    public function validar(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->f_validado= $fecha;
        $contrato->status='validado';

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


    public function liberar(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->status = 'liberado';
        $contrato->objeto = $request->objeto;
        $contrato->f_liberado= $fecha;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


    public function envia_firma_rl(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->status = 'enfirmarl';
        $contrato->envio_firma_rl= $fecha;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


    public function firma_rl(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->status = 'firmadorl';
        $contrato->f_firma_rl= $fecha;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


    public function envia_firma_cl(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->status = 'enfirmacl';
        $contrato->envio_firma_cl= $fecha;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }

        public function firma_cliente(Request $request, $id)
    {
        $fecha= Carbon::now();
        $contrato =Contrato::find($id);
        $contrato->status = 'firmadocl';
        $contrato->f_firma_cliente= $fecha;

        $contrato->save();

        return redirect()->route('contratos.index'); 
    }


}