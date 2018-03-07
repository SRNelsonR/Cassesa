@extends('templates.main')
 <link rel="stylesheet" type="text/css" href="{{asset('plugins/css-personalizado/estilos-errores.css')}}">
@section('content')



<!-- Header -->
								

								
@section('subtitle')
Agregar Empleados
@endsection
<div  class="row">
<div class="col-md-6">
 
      {!! Form::open(['route' => 'empleados.store', 'method'=>'POST', 'files'=>true, 'id'=>'formEmpty','data-smk-icon'=>'glyphicon-remove-sign']) !!}
   <br>
   <br>
   <legend>-------------------------------- Datos personales ---------------------------------<br><br></legend>

	   <div class="form-group" >
	   		
	   	    <label class="control-label">Nombre Completo</label>
	   		<input 
	   		type="text" name="name" class="form-control" placeholder="Nombre completo" required
	   		  id="nombre" pattern="([a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*)+" >
	   		
	   </div>

       <br>
	   <div class="form-group">
	   		{!! Form::label('identidad','Identidad',['class'=>'control-label']) !!}
	   		{!! Form::text('identidad',null,['class'=>'form-control','required','placeholder'=>'Escriba la idendtidad sin guiones o puntos. Ejemplo (0825166412189)', 'minlength'=>'13' ,'maxlength'=>'13','pattern'=>'[0-9]'])!!}
	   </div>
	   <br>

	   <div class="form-group">
	   		{!! Form::label('fecha_nacimiento','Fecha de Nacimiento',['class'=>'control-label']) !!}
	   		{!! Form::date('fecha_nacimiento',null,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}	   		
	   </div>
	    	<br>
	   <div class="form-group">
	   		{!! Form::label('genero','Genero',['class'=>'control-label']) !!}
	   		{!! Form::select('genero',[''=>'Seleccione un Genero..','Masculino'=> 'Masculino','Femenino'=>'Femenino'],null,['class'=>'form-control', 'required'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Telefono',['class'=>'control-label']) !!}
	   		{!! Form::text('telefono',null,['class'=>'form-control','required', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el numero telefonico sin guiones. Ejemplo (56542535)'])!!}
	   </div>
	   <br>
          <div class="form-group">
	   		{!! Form::label('email','Correo electronico',['class'=>'control-label']) !!}
	   		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   
	   <br>
       <div class="form-group">
	   		{!! Form::label('cursos','Cursos',['class'=>'control-label']) !!}
	   		{!! Form::textarea('cursos',null,['class'=>'form-control','required','placeholder'=>'Escriba la informacion de los cursos....  '])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('estudios','Estudios',['class'=>'control-label']) !!}
	   		{!! Form::textarea('estudios',null,['class'=>'form-control','required','placeholder'=>'Escriba la informacion....  '])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('experiencia','Experiencia Laboral',['class'=>'control-label']) !!}
	   		{!! Form::textarea('experiencia',null,['class'=>'form-control','required','placeholder'=>'Escriba la informacion de las experiencias laborales....  '])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('aptitudes','Aptitudes',['class'=>'control-label']) !!}
	   		{!! Form::textarea('aptitudes',null,['class'=>'form-control','placeholder'=>'Escriba las aptitudes.... (opcional)'])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('direccion','Direccion',['class'=>'control-label']) !!}
	   		{!! Form::textarea('direccion',null,['class'=>'form-control','required','placeholder'=>'Escriba la direccion....  '])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('image','Imagen del empleado',['class'=>'control-label']) !!}
	   		{!! Form::file('image',null,['class'=>'btn btn-primary','required'])!!}
	   </div>
	   <br>

	   <br>


       

      <legend>---------------------------------- Datos de referencia -------------------------------<br><br></legend>

       <div class="form-group">
	   		{!! Form::label('name_refe','Nombre Completo',['class'=>'control-label']) !!}
	   		{!! Form::text('name_refe',null,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}
	   </div>
       <br>
        <div class="form-group">
	   		{!! Form::label('identidad','Identidad',['class'=>'control-label']) !!}
	   		{!! Form::text('identidad_refe',null,['class'=>'form-control','required', 'minlength'=>'13' ,'maxlength'=>'13','placeholder'=>'Escriba la idendtidad sin guiones o puntos. Ejemplo (0825166412189)'])!!}
	   </div>
	   <br>
	   
	    <div class="form-group">
	   		{!! Form::label('direccion_refe','Direccion',['class'=>'control-label']) !!}
	   		{!! Form::textarea('direccion_refe',null,['class'=>'form-control','required', 'placeholder'=>'Escriba la direccion....  '])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Telefono',['class'=>'control-label']) !!}
	   		{!! Form::text('telefono_refe',null,['class'=>'form-control','required', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el numero telefonico sin guiones. Ejemplo (56542535)'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('informacion_refe','Informacion de la Referencia',['class'=>'control-label']) !!}
	   		{!! Form::text('informacion_refe',null,['class'=>'form-control','placeholder'=>'Informacion.....'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('email_refe','Correo electronico',['class'=>'control-label']) !!}
	   		{!! Form::email('email_refe',null,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   <br>
	  
		  
	     <div class="form-group">
	   		{!! Form::submit('Registrar',['class'=>'btn btn-default','id'=>'btnEmpty' ]) !!}
	   </div>

	  

	</div>						
</div>
 <script  src="{{asset('plugins/js-especiales/validacion.js')}}"> </script>
@endsection