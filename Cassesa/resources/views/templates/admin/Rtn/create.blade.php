@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
NIT
@endsection


<div  class="row">
<div class="col-md-6">

      {!! Form::open(['route' => ['empleadosRTN.store',$empleados->id], 'method'=>'POST', 'files'=>true]) !!}
   <br>
   
   

	  
	   <div class="form-group">
	   		{!! Form::label('image','Seleccione la imagen/scanner del NIT ') !!}

	   		{!! Form::file('image',null,['class'=>'btn','required'])!!}	   	
	   		 <input style="visibility: hidden;" type="text" name="empleado_id" value="{{$empleados->id}} ">
	   		 
	   </div>
	
  
		  
	     <div class="form-group">
	   		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>



















@endsection