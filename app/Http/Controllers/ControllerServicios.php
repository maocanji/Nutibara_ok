<?php

namespace App\Http\Controllers;

use App\Http\Requests\reque_ciudades;
use App\Http\Requests\reque_clientes;
use App\Models\Cities;
use App\Models\Custumers;
use App\Models\Order_detatails;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ControllerServicios extends Controller
{
    
    public function inicio()
    {
          //datos del Usuario
          $ciudades = Cities::all();
          $clientes = Custumers::with('rel_city')->get();
          $order = Orders::all();
          $productos = Products::all();
          $detalles = Order_detatails::all();


        return view('inicio')->with([
            'ciudades'=>$ciudades,
            'clientes'=>$clientes,
            'productos'=>$productos,
            'order'=>$order,
            'detalles'=>$detalles,

        ]);
    }

    public function GuardarCiudades (reque_ciudades $request){

        $ciudades = new Cities();
        $ciudades->city_name = $request->ciudades;
        $ciudades->save();
        

        return response( )->json( array( "ciudades" => $ciudades), 200 );
    }
    
    public function GuardarClientes (reque_clientes $request){

        $clientes = new Custumers();
        $clientes->city_id = $request->ciudad_id['city_id'];
        $clientes->customers_id_number = trim(str_replace(' ', '', $request->customers_id_number));
        $clientes->customers_name = $request->customers_name;
        $clientes->customers_birth_date = $request->customers_birth_date;
        $clientes->customers_address = $request->customers_address;
        $clientes->customers_phone = trim(str_replace(' ', '', $request->customers_phone));
        $clientes->save();
        $clientes = Custumers::with('rel_city')->find($clientes->customers_id);
        return response( )->json( array( "clientes" => $clientes), 200 );
    }









}
