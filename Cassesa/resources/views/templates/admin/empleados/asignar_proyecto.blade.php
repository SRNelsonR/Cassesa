@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Asignar Proyecto a Empleados
@endsection


<div  class="row">
<div class="col-md-6">

      {!! Form::open(['route' => ['empleados.asignar.update',$empleados], 'method'=>'PUT']) !!}
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
	   		{!! Form::label('proyecto','Proyecto') !!}
	   		<select name="proyecto_id" class="form-control">
	   			@foreach($proyectos as $proyecto)
	   			<option value='{{$proyecto->id}}'>{{$proyecto->name}} -- {{$proyecto->direccion}}</option>
	   			@endforeach
	   		</select>

	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Asignar Proyecto',['class'=>'btn btn-default', 'id'=>'btnInfo']) !!}
	   </div>

	</div>						
</div>
         <input type="button" name="" id="btnInfo1" onclick="true">




 <script  src="{{asset('plugins/js-especiales/mensajes.js')}}"> </script>


@endsection



 	