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
        Schema::create('Custumers', function (Blueprint $table) {
            $table->bigIncrements('customers_id');
            $table->char('customers_id_number','50');
            $table->char('customers_name','50');
            $table->date('customers_birth_date');
            $table->char('customers_address','100');
            $table->char('customers_phone','10');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Custumers');
    }
};
