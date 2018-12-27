<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Factura;
use App\Empresa;
use App\Cliente;

use Laracasts\Flash\Flash;

class facturaController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {

        $facturas= Factura::with(['cliente','empresa'])
        ->orderBy('empresa_id','ASC')   
        ->orderBy('folio','DESC')
        ->paginate(50000);

         $registros= Factura::count();

        //dd($facturas);

        return view('facturas.index')->with(compact('facturas','registros'));
    }
   
    public function create()
    {
        $clientes=Cliente::pluck('razon_social','id');
        $empresas=Empresa::pluck('razon_social','id');

        return view('facturas.create',compact('clientes','empresas'));
    }
    
    public function store(Request $request)
    {
         $facturas = new Factura($request->all());
         $facturas->cliente_id = $request->cliente_id;
         $facturas->empresa_id = $request->empresa_id;
         $facturas->fecha = $request->fecha;         
         $facturas->folio = $request->folio;
         $facturas->concepto = $request->concepto;
         $facturas->status = $request->status;
         $facturas->serie = $request->serie;              
         $facturas->importe = $request->importe;
         $facturas->moneda = $request->moneda;
        

         
         $facturas->save();       

        return back()->with('message', ['success', "Registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $factura= Factura::find($id);

        $empresas=Empresa::pluck('razon_social','id');
        $clientes=Cliente::pluck('razon_social','id');

        return view('facturas.edit',compact('factura','empresas','clientes'));
        
    }
   
    public function update(Request $request, $id)
    {
        $factura =Factura::find($id);

   
        $factura->fill($request->all());
        $factura->save();

       
        return redirect()->route('facturas.index');
    }
    
    public function destroy($id)
    {
        $factura = Factura::findOrfail($id);

        $factura->delete();
           
       return redirect(route('facturas.index'));
    }
}
