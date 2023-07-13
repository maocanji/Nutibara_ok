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
        Schema::create('Orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->date('order_date');
            $table->decimal('order_total',15,2);
            $table->date('order_date_delivery');
            $table->char('customers_status',10);

        });

   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orders');
   
    }
};
