<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Custumers', function (Blueprint $table) {
             // Agregar campo relacional
             $table->unsignedBigInteger('city_id');
              // Relación de columnas
             $table->foreign('city_id')->references('city_id')->on('Cities')->onDelete('cascade');

        });

      
        Schema::table('Order_Details', function (Blueprint $table) {
            // Agregar campo relacional
             $table->unsignedBigInteger('product_id');
             // Relación de columnas
             $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');

        });

        Schema::table('Order_Details', function (Blueprint $table) {
             // Agregar campo relacional
             $table->unsignedBigInteger('order_id');
             // Relación de columnas
            $table->foreign('order_id')->references('order_id')->on('Orders')->onDelete('cascade');

        });

        Schema::table('Orders', function (Blueprint $table) {
             // Agregar campo relacional
            $table->unsignedBigInteger('customers_id');
            // Relación de columnas
            $table->foreign('customers_id')->references('customers_id')->on('Custumers')->onDelete('cascade');

        });

       
 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('Order_Details', function (Blueprint $table) {
            // Eliminar relación de columnas
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');

        });



        Schema::dropIfExists('products');
        Schema::dropIfExists('Orders');
        Schema::dropIfExists('Order_Details');
        Schema::dropIfExists('Custumers');
        Schema::dropIfExists('Cities');


        Schema::dropIfExists('Custumers', function (Blueprint $table) {
            // Eliminar relación de columnas
            $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');
        });

        Schema::dropIfExists('Order_Details', function (Blueprint $table) {
            // Eliminar relación de columnas
            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');

        });

       

        Schema::dropIfExists('Orders', function (Blueprint $table) {
            // Eliminar relación de columnas
            $table->dropForeign(['customers_id']);
            $table->dropColumn('customers_id');

        });

     
    }
};
