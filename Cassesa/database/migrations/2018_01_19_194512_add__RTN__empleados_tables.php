<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRTNEmpleadosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RTN_Empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados')->delete('cascade');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RTN_Empleados');
    }
}
