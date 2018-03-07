<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpleadosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',120);
            $table->string('identidad',20);
            $table->date('fecha_nacimiento');
            $table->enum('genero',['Masculino','Femenino']);
            $table->string('telefono',20);
            $table->string('email',20);
            $table->string('cursos',500);
            $table->string('estudios',500);
            $table->string('direccion',400); 

            /*Campos a agregar*/
            $table->string('experiencia',400);
            $table->string('aptitudes',400);
            $table->string('codigo_carnet',100);           

            /*datos de la referencia*/
             $table->string('name_refe',120);
             $table->string('identidad_refe',20);
             $table->string('direccion_refe',500);
             $table->string('telefono_refe',30);
             $table->string('informacion_refe',500);
             $table->string('email_refe',30);
             

            /* Estado del empleado*/
            $table->string('estado',50);
            $table->string('descripcion',500);
            $table->timestamps('fecha_estado');

            /*Tipo de empleado*/
            $table->string('cargo');

            /*Relaciones del proyecto */
            $table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('Proyectos');
            $table->timestamps('fecha_proyecto');
             
            /*Relaciones con la imagen*/
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            
            
            

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
        Schema::dropIfExists('Empleados');
    }
}
