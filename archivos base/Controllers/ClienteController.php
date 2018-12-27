<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Cliente;
use App\Plaza;
use App\Giro;
use App\Grupo;
use App\Ciudad;
use App\Colaborador;
use App\Esquema;
use App\Informe;
use App\Seguimiento;
use App\Empleado;
use Laracasts\Flash\Flash;
use DB;

class ClienteController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index( Request $request)
    {
        
        
        $clientes= Cliente::with(['plaza','giro','ciudad','grupo','analista','asesor','promotor'])->razon_social($request->get('razon_social'))
        ->orderBy('razon_social','ASC')   
        ->paginate(1000);

         $registros= Cliente::count();

        //dd($clientes);

        return view('clientes.index')->with(compact('clientes','registros'));
    }

    public function show($id)
    {
        
        $cliente=Cliente::find($id);
        $contratos= $cliente->contratos;
        $seguimientos = $cliente->seguimientos;
        $facturas = $cliente->facturas;
        $esquemas = $cliente->esquemas;       
        $contactos = $cliente->contactos;
        $informes = $cliente->informes;
        $empleados = $cliente->empleados;

        //dd($empleados);

        //$no_empleaodos = $empleados->count();

        $seguimientos2 = Seguimiento::where('cliente_id','=',$id)
        ->orderby('fecha','DESC')
        ->get(); 

      

      $propuestas=DB::table('esquemas as esq')
      ->join('empresas as emp','emp.id','=','esq.facturadora_id')
      ->select('esq.cliente_id','esq.producto','emp.razon_social','esq.id','esq.concepto','esq.fecha_inicio','esq.comision'
                ,'esq.pagadora_id as pagadora as razon_social2')
      ->where('esq.cliente_id','=',$id)
            
      ->get();

      
      //   Ingenia      

         $ingenia = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','23')
        ->get();

        $pingenia = $ingenia->count();        
        
        $pcingenia = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','23')
        ->where('status','concluido')
        ->count();
        
        
        if($pingenia <= 0) 
        {
            $poringenia = 0;
        }
       
        else
        {
            $poringenia = $pcingenia / $pingenia * 100;
        }    
        

      //Aljez  
        
        
        
        $aljez = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','41')
        ->get();

        $paljez = $aljez->count();        
        
        $pcaljez = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','41')
        ->where('status','concluido')
        ->count();

        if($paljez <= 0) 
        {
            $poraljez = 0;
        }
       
        else
        {
            $poraljez = $pcaljez / $paljez * 100;
        }

        //----------------------------

        $daikon = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','22')
        ->get();

        $pdaikon = $daikon->count();        
        
        $pcdaikon = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','22')
        ->where('status','concluido')
        ->count();

        if($pdaikon <= 0) 
        {
            $pordaikon = 0;
        }
       
        else
        {
            $pordaikon = $pcdaikon / $pdaikon * 100;
        }


        //--------------------------------

        $dyc = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','20')
        ->get();

        //dd($dyc);

        $pdyc = $dyc->count();        
        
        $pcdyc = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','20')
        ->where('status','concluido')
        ->count();

       if($pdyc <= 0) 
        {
            $pordyc = 0;
        }
       
        else
        {
            $pordyc = $pcdyc / $pdyc * 100;
        }

        //------------------------------------



        $centro = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','1')
        ->get();

        $pcentro = $centro->count();        
        
        $pccentro = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','1')
        ->where('status','concluido')
        ->count();

       if($pcentro <= 0) 
        {
            $porcentro = 0;
        }
       
        else
        {
            $porcentro = $pccentro / $pcentro * 100;
        }

        //-----------------------------------

        $enterprise = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','6')
        ->get();

        $penterprise = $enterprise->count();        
        
        $pcenterprise = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','6')
        ->where('status','concluido')
        ->count();

       if($penterprise <= 0) 
        {
            $porenterprise = 0;
        }
       
        else
        {
            $porenterprise = $pcenterprise / $penterprise * 100;
        }

        //-----------------------------------

        $busnes = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','42')
        ->get();

        $pbusnes = $busnes->count();        
        
        $pcbusnes = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','42')
        ->where('status','concluido')
        ->count();

       if($pbusnes <= 0) 
        {
            $porbusnes = 0;
        }
       
        else
        {
            $porbusnes = $pcbusnes / $pbusnes * 100;
        }

        //-----------------------------------

         $s4u = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','43')
        ->get();

       // dd($s4u);

        $ps4u = $s4u->count();        
        
        $pcs4u = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','43')
        ->where('status','concluido')
        ->count();

       if($ps4u <= 0) 
        {
            $pors4u = 0;
        }

       
        else
        {
            $pors4u = $pcs4u / $ps4u * 100;
        }   
        


        //-----------------------------------

        $ave = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','13')
        ->get();

        $pave = $ave->count();        
        
        $pcave = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','13')
        ->where('status','concluido')
        ->count();

       
       if($pave <= 0) 
        {
            $porave = 0;
        }
       
        else
        {
            $porave = $pcave / $pave * 100;
        }

        //-----------------------------------

        //dd($ave);

         $aportaciones = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','12')
        ->get();

        $paportaciones = $aportaciones->count();        
        
        $pcaportaciones = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','12')
        ->where('status','concluido')
        ->count();

        if($paportaciones <= 0) 
        {
            $poraportaciones = 0;
        }
       
        else
        {
            $poraportaciones = $pcaportaciones / $paportaciones * 100;
        }

        
     

        //-----------------------------------

         $lv = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','21')
        ->get();

        $plv = $lv->count();        
        
        $pclv = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','21')
        ->where('status','concluido')
        ->count();


        if($plv <= 0) 
        {
            $porlv = 0;
        }
       
        else
        {
            $porlv = $pclv / $plv * 100;
        }

       // $porlv = $pclv / $plv * 100;

        //-----------------------------------


          $consorcio = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','40')
        ->get();

        $pconsorcio = $consorcio->count();        
        
        $pcconsorcio = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','40')
        ->where('status','concluido')
        ->count();


        if($pconsorcio <= 0) 
        {
            $porconsorcio = 0;
        }
       
        else
        {
            $porconsorcio = $pcconsorcio/ $pconsorcio * 100;
        }



        $tt = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','50')
        ->get();

        $ptt = $tt->count();        
        
        $pctt = Informe::where('cliente_id','=',$id)
        ->where('empresa_id','=','50')
        ->where('status','concluido')
        ->count();


        if($ptt <= 0) 
        {
            $portt = 0;
        }
       
        else
        {
            $portt = $pctt/ $ptt * 100;
        }

        //------------------------------------------

        $ingeniae = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','23')
        ->orderby('fecha_inicio','DESC')
        ->get();

        //dd($ingeniae);
        

        $aljeze = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','41')
        ->orderby('fecha_inicio','DESC')
        ->get();

        $daikone = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','22')
        ->orderby('fecha_inicio','DESC')
        ->get();

        //dd($daikone);

        $dyce = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','20')
        ->orderby('fecha_inicio','DESC')
        ->get();



        $centroe = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','1')
        ->orderby('fecha_inicio','DESC')
        ->get();

        $enterprisee = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','6')
        ->orderby('fecha_inicio','DESC')
        ->get();

        $busnese = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','42')
        ->orderby('fecha_inicio','DESC')
        ->get();

        $s4ue = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','43')
        ->orderby('fecha_inicio','DESC')
        ->get();



        $avee = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','13')
        ->orderby('fecha_inicio','DESC')
        ->get();

         $aportacionese = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','12')
        ->orderby('fecha_inicio','DESC')
        ->get();

        //dd($aportacionese);

         $lve = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','21')
        ->orderby('fecha_inicio','DESC')
        ->get();

         $consorcioe = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','40')
        ->orderby('fecha_inicio','DESC')
        ->get();

        $tte = Esquema::where('cliente_id','=',$id)
        ->where('facturadora_id','=','50')
        ->orderby('fecha_inicio','DESC')
        ->get();


        
        //------ Acumulados---------


          $informe_conceptos=DB::table('informes')
          ->select('concepto', DB::raw('SUM(importe_pesos) as importe_pesos'),DB::raw('SUM(importe_dolares) as importe_dolares'))
          ->where('cliente_id','=' ,$id)
          ->groupby('concepto')
          ->get();

        // //dd($informes_concepto);


        $informe_empresas=DB::table('informes as inf')
        ->join('empresas as emp','emp.id','=','inf.empresa_id')
        ->select('emp.razon_social as facturadora','inf.empresa_id as empresa_id',
                DB::raw('SUM(importe_pesos) as importe_pesos'),
                DB::raw('SUM(importe_dolares) as importe_dolares'))
        ->where('cliente_id','=' ,$id)
        ->groupby('facturadora','empresa_id')
        ->get();


        $informe_ejercicios=DB::table('informes as inf')
        ->join('empresas as emp','emp.id','=','inf.empresa_id')
        ->select('emp.razon_social as facturadora','inf.empresa_id as empresa_id',
                DB::raw('SUM(importe_pesos) as importe_pesos'),
                DB::raw('SUM(importe_dolares) as importe_dolares'),
                'inf.ejercicio')
        ->where('cliente_id','=' ,$id)
        ->groupby('facturadora','empresa_id','ejercicio')
        ->orderBy('facturadora','ASC')
        ->orderby('ejercicio','DESC')
        ->get();

        //dd($informe_ejercicios);


        // $facturas_facturadora_periodo=DB::table('facturas as fac')
        // ->join('empresas as emp','emp.id','=','fac.id_empresa')
        // ->select('emp.razon_social as facturadora','moneda', DB::raw ("SUM(IF(moneda='Pesos',importe,0)) as total_pesos"), DB::raw ("SUM(IF(moneda='Dolares',importe,0)) as total_dolares"), DB::raw('MONTH(fecha) as periodo'), DB::raw('YEAR(fecha) as ano'))
        // ->where('fac.id_cliente','=' ,$id)
        // ->where('fac.estatus','=','Activa')
        // ->groupby('facturadora','ano','periodo')
        // ->orderby('facturadora','ano','periodo', 'asc')
        // ->get();

        // $facturas_facturadora_periodo_concepto=DB::table('facturas as fac')
        // ->join('empresas as emp','emp.id','=','fac.id_empresa')
        // ->select('emp.razon_social as facturadora','fac.concepto as concepto','moneda', DB::raw ("SUM(IF(moneda='Pesos',importe,0)) as total_pesos"),'fac.folio', DB::raw ("SUM(IF(moneda='Dolares',importe,0)) as total_dolares"), DB::raw('MONTH(fecha) as periodo'), DB::raw('YEAR(fecha) as ano'))
        // ->where('fac.id_cliente','=' ,$id)
        // ->where('fac.estatus','=','Activa')
        // ->groupby('facturadora','ano','periodo','concepto')
        // ->orderby('facturadora','ano','periodo', 'asc')
        // ->get();


        // $facturas=DB::table('facturas as fac')
        // ->join('clientes as cli', 'cli.id', '=', 'fac.id_cliente')
        // ->join('empresas as emp','emp.id','=','fac.id_empresa')
        // ->selectRaw('count(*) as count')
        // ->where('fac.id_cliente','=' ,$id)

        // ->get();

        

        

        return view('clientes.show')->with(compact(
            'cliente',
            'contratos',
            'seguimientos',
            'seguimientos2',
            'facturas',
            'esquemas',
            'ffcp',
            'ff',
            'contactos',
            'empleados',
            'ultimo',
            'propuestas',
            'informes',
            'informe_conceptos',
            'informe_empresas',
            'informe_ejercicios',
            'ingenia','aljez','busnes','enterprise','daikon','dyc','centro','s4u','ave','aportaciones','lv','consorcio','tt',
            'ingeniae','aljeze','busnese','enterprisee','daikone','dyce','centroe','s4ue','avee','aportacionese','lve','ri','consorcioe','tte',
            'poringenia','poraljez','poraportaciones','porenterprise','porbusnes','porlv','pors4u','porcentro','pordyc','porave','pordaikon',
            'porconsorcio','portt'



            ));


    }
   
    public function create()
    {
        $plazas=Plaza::pluck('descripcion','id');

        $plazas=Plaza::pluck('descripcion','id');
        $giros=Giro::pluck('descripcion','id');
        $grupos=Grupo::pluck('descripcion','id');
        $ciudades=Ciudad::pluck('descripcion','id');

        $colaboradores=Colaborador::pluck('nombre','id');

        return view('clientes.create',compact('plazas','giros','ciudades','grupos','colaboradores'));
    }
    
    public function store(Request $request)
    {
         $clientes = new Cliente($request->all());
         $clientes->razon_social = $request->razon_social;
         $clientes->nombre_comercial = $request->nombre_comercial;
         $clientes->domicilio = $request->domicilio;
         
         $clientes->tipo_cliente = $request->tipo_cliente;
         $clientes->status = $request->status;
         $clientes->plaza_id = $request->plaza_id;
         $clientes->giro_id = $request->giro_id;
         $clientes->grupo_id = $request->grupo_id;
         $clientes->ciudad_id = $request->ciudad_id;
         $clientes->persona = $request->persona;
         $clientes->promotor_id = $request->promotor_id;
         $clientes->asesor_id = $request->asesor_id;
         $clientes->analista_id = $request->analista_id;

         
         $clientes->save();       

        return back()->with('message', ['success', "registro creado correctamente"]);
    }

  
    public function edit($id)
    {
        $cliente= Cliente::findOrfail($id);

        $plazas=Plaza::pluck('descripcion','id');
        $giros=Giro::pluck('descripcion','id');
        $grupos=Grupo::pluck('descripcion','id');
        $ciudades=Ciudad::pluck('descripcion','id');

        $colaboradores=Colaborador::pluck('nombre','id');

        return view('clientes.edit',compact('cliente','plazas','grupos','ciudades','colaboradores','giros'));
        
    }
   
    public function update(Request $request, $id)
    {
        $cliente =Cliente::findOrfail($id);   
        $cliente->fill($request->all());
        $cliente->save();

       
        return redirect()->route('clientes.index');
    }
    
    public function destroy($id)
    {
        $cliente = Cliente::findOrfail($id);

        $cliente->delete();
           
       return redirect(route('clientes.index'));
    }



       
}
