<?php

namespace App\Http\Controllers;

use App\Http\Requests\reque_ciudades;
use App\Http\Requests\reque_clientes;
use App\Http\Requests\requeDetalles;
use App\Http\Requests\requeOrder;
use App\Http\Requests\requeProductos;
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
          $order = Orders::with('rel_custumers')->get();
          $productos = Products::all();
          $detalles = Order_detatails::with('rel_producto','rel_order')->get();

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

    public function GuardarOrders (requeOrder $request){

        $order = new Orders();
        $order->order_date = $request->order_date;
        $order->order_total =$request->order_total;
        $order->order_date_delivery = $request->order_date_delivery;
        $order->customers_status = $request->customers_status;
        $order->customers_id = $request->customers_id['customers_id'];
        $order->save();
        $order = Orders::with('rel_custumers')->find($order->order_id);
        return response( )->json( array( "order" => $order), 200 );
    }

    public function GuardarProductos (requeProductos $request){

        $productos = new Products();
        $productos->product_description = $request->product_description;
        $productos->product_amount =$request->product_amount;
        $productos->product_value = $request->product_value;
        $productos->product_status = $request->product_status;
        $productos->save();
        return response( )->json( array( "productos" => $productos), 200 );
    }

    public function GuardarDetails (requeDetalles $request){

        $detalles = new Order_detatails();
        $detalles->product_id = $request->product_id['product_id'];
        $detalles->order_id =$request->order_id['order_id'];
        $detalles->save();
        $detalles = Order_detatails::with('rel_producto','rel_order')->find($detalles->detail_id);
        return response( )->json( array( "detalles" => $detalles), 200 );
    }

    
    



}
