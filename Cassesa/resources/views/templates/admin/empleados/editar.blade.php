@extends('templates.main')


@section('content')

								
@section('subtitle')
Editar Empleados
@endsection

<div class="row">
<div class="col-md-6">

      {!! Form::open(['route' => ['empleados.update',$empleados], 'method'=>'PUT']) !!}
   <br>
   <br>
   <legend>Datos personales -----------------------------------------------------------------<br><br></legend>

	   <div class="form-group" >
	   		{!! Form::label('name','Nombre Completo') !!}
	   		{!! Form::text('name',$empleados->name,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}
	   </div>
       <br>
	   <div class="form-group">
	   		{!! Form::label('identidad','Identidad') !!}
	   		{!! Form::text('identidad',$empleados->identidad,['class'=>'form-control','required','placeholder'=>'########'])!!}
	   </div>
	    	<br>
	    	<div class="form-group">
	   		{!! Form::label('fecha_nacimiento','Fecha de Nacimiento') !!}
	   		{!! Form::date('fecha_nacimiento',$empleados->fecha_nacimiento,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}	   		
	   </div>
	    	<br>
	   
	   <div class="form-group">
	   		{!! Form::label('genero','Genero') !!}
	   		{!! Form::select('genero',[''=>'Seleccione un Genero..','Masculino'=> 'Masculino','Femenino'=>'Femenino'],$empleados->genero,['class'=>'form-control'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Telefono') !!}
	   		{!! Form::text('telefono',$empleados->telefono,['class'=>'form-control','required','placeholder'=>'########'])!!}
	   </div>
	   <br>
          <div class="form-group">
	   		{!! Form::label('email','Correo electronico') !!}
	   		{!! Form::text('email',$empleados->email,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	 
	   <br>
	     <div class="form-group">
	   		{!! Form::label('direccion','Direccion') !!}
	   		{!! Form::textarea('direccion',$empleados->direccion,['class'=>'form-control','required','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	   <br>
       <div class="form-group">
	   		{!! Form::label('cursos','Cursos') !!}
	   		{!! Form::textarea('cursos',$empleados->cursos,['class'=>'form-control','required','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('estudios','Estudios') !!}
	   		{!! Form::textarea('estudios',$empleados->estudios,['class'=>'form-control','required','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('experiencia','Experiencia Laboral') !!}
	   		{!! Form::textarea('experiencia',$empleados->experiencia,['class'=>'form-control','required','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('aptitudes','Aptitudes') !!}
	   		{!! Form::textarea('aptitudes',$empleados->aptitudes,['class'=>'form-control','required','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	   <br>



      <legend>Datos de referencia -----------------------------------------------------------------<br><br></legend>

       <div class="form-group">
	   		{!! Form::label('name_refe','Nombre Completo') !!}
	   		{!! Form::text('name_refe',$empleados->name_refe,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Telefono') !!}
	   		{!! Form::text('telefono_refe',$empleados->telefono_refe,['class'=>'form-control','required','placeholder'=>'########'])!!}
	   </div>
	   <br>
 
	   <div class="form-group">
	   		{!! Form::label('identidad','Identidad') !!}
	   		{!! Form::text('identidad_refe',$empleados->identidad_refe,['class'=>'form-control','required','placeholder'=>'########'])!!}
	   </div>
	   <br>
	    <br>
	   
	    <div class="form-group">
	   		{!! Form::label('direccion_refe','Direccion') !!}
	   		{!! Form::textarea('direccion_refe',$empleados->direccion_refe,['class'=>'form-control','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
       <div class="form-group">
	   		{!! Form::label('informacion_refe','Informacion de la Referencia') !!}
	   		{!! Form::text('informacion_refe',$empleados->informacion_refe,['class'=>'form-control','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	    <div class="form-group">
	   		{!! Form::label('email_refe','Correo electronico') !!}
	   		{!! Form::email('email_refe',$empleados->email_refe,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>




 

@endsection