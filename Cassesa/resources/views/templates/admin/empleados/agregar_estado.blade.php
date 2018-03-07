@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar o Agregar estado al empleado
@endsection


<div  class="row">
<div class="col-md-5">

      {!! Form::open(['route' => ['empleados.asignar_estado.update',$empleados], 'method'=>'PUT']) !!}
   <br>
   <br>
   
   <a href="#" class="image"><img src="/images/perfiles/{{$empleados->images->name}}" 
 				   				style=" 
    			                height: 110px;
							    width: 110px;
							    /* los siguientes valores son independientes del tamaño del círculo */
							    background-repeat: no-repeat;
							    background-position: 20%;
							    border-radius: 20%;
							    background-size: 100% auto;" />
				</a>
 
				<h3>{{$empleados->name}} <br><br></h3>

   			<br>
	   <div class="form-group">
	   		{!! Form::label('estado','Agregar estado') !!}
            {!! Form::select('estado',[
	   		'Activo'=> 'Activo',
	   		'Desactivo'=>'Desactivo',
	   		'Renuncia'=>'Renuncia',
	   		'Despedido'=> 'Despedido',
	   		'Incapacitado Temporal'=>'Incapacitado Temporal'], $empleados->estado,['class'=>'form-control','required' , 'placeholder'=>'Seleccione un Departamento..'])!!}
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::textarea('descripcion',$empleados->descripcion,['class'=>'form-control','required'])!!}

           



	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>







@endsection