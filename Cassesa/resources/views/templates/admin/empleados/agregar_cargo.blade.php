@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar o Agregar cargo al empleado
@endsection


<div  class="row">
<div class="col-md-3">

      {!! Form::open(['route' => ['empleados.asignar_cargo.update',$empleados], 'method'=>'PUT']) !!}
   <br>
   <br>
   <legend>{{$empleados->cargo}}<br><br></legend>
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
	   		{!! Form::label('cargo','Agregar cargo') !!}
             {!! Form::text('cargo',$empleados->cargo,['class'=>'form-control','required'])!!}	   
	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>







@endsection