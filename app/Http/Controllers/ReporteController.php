<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Cliente;
use App\Colaborador;
use Laracasts\Flash\Flash;

class ReporteController extends Controller
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
        $karen = Cliente::where('analista_id','60')
        ->orderBy('razon_social','ASC')
        ->get();

        $yanet = Cliente::where('analista_id','69')
        ->orderBy('razon_social','ASC')
        ->get();

        //dd($yanet);

        $angel = Cliente::where('analista_id','116')
        ->orderBy('razon_social','ASC')
        ->get();

        $anahi = Cliente::where('analista_id','117')
        ->orderBy('razon_social','ASC')
        ->get();

        $zurisadai = Cliente::where('analista_id','118')
        ->orderBy('razon_social','ASC')
        ->get();

        $yajaira = Cliente::where('analista_id','70')
        ->orderBy('razon_social','ASC')
        ->get();

        $erika = Cliente::where('analista_id','68')
        ->orderBy('razon_social','ASC')
        ->get();

        $eduardo = Cliente::where('analista_id','58')
        ->orderBy('razon_social','ASC')
        ->get();

        $sayuri = Cliente::where('analista_id','119')
        ->orderBy('razon_social','ASC')
        ->get();

        $diana = Cliente::where('analista_id','126')
        ->orderBy('razon_social','ASC')
        ->get();

        $andrea = Cliente::where('analista_id','121')
        ->orderBy('razon_social','ASC')
        ->get();

         $alejandra = Cliente::where('analista_id','27')
        ->orderBy('razon_social','ASC')
        ->get();

        $registros1 = $karen->count();
        $registros2 = $diana->count();
        $registros3 = $andrea->count();
        $registros4 = $erika->count();
        $registros5 = $eduardo->count();
        $registros6 = $anahi->count();
        $registros7 = $yanet->count();
        $registros8 = $zurisadai->count();
        $registros9 = $sayuri->count();
        $registros10 = $yajaira->count();
        $registros11 = $alejandra->count();
        $registros12 = $angel->count();
        

        

        return view('reportes.clientesxanalista',compact(
            'karen','eduardo','yanet','anahi','erika','sayuri','zurisadai','alejandra','angel','andrea','diana','yajaira',
            'registros1',
            'registros2',
            'registros3',
            'registros4',
            'registros5',
            'registros6',
            'registros7',
            'registros8',
            'registros9',
            'registros10',
            'registros11',
            'registros12'
            ));
         
    }

   
}