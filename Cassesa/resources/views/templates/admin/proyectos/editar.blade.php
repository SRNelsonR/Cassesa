@extends('templates.main')


@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar Proyecto 
@endsection


<div  class="row">
<div class="col-md-6">
<br>
<h2 style="color: red;">{{$proyectos->name}}</h2>

      {!! Form::open(['route' => ['proyectos.update',$proyectos], 'method'=>'PUT']) !!}
	   <div class="form-group" >
	   		{!! Form::label('name','Nombre del proyecto') !!}
	   		{!! Form::text('name',$proyectos->name,['class'=>'form-control','title'=>'Se necesita un nombre','required','placeholder'=>'Nombre del proyecto'])!!}
	   </div>
       <br>
	   <div class="form-group">
	   		{!! Form::label('direccion','Direccion') !!}
	   		{!! Form::textarea('direccion',$proyectos->direccion,['class'=>'form-control','required','placeholder'=>'Direccion...'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('depa','Departamento') !!}
	   		{!! Form::select('depa',[
	   		'Petén'=> 'Petén',
	   		'Huehuetenango'=>'Huehuetenango',
	   		'Quiché'=> 'Quiché',
	   		'Alta Verapaz'=>'Alta Verapaz',
	   		'Izabal'=> 'Izabal',
	   		'San Marcos'=>'San Marcos',
	   		'Quetzaltenango'=> 'Quetzaltenango',
	   		'Totonicapán'=>'Totonicapán',
	   		'Sololá'=> 'Sololá',
	   		'Chimaltenango'=>'Chimaltenango',
	   		'Sacatepéquez'=> 'Sacatepéquez',
	   		'Guatemala'=>'Guatemala',
	   		'Baja Verapaz'=> 'Baja Verapaz',
	   		'El Progreso'=>'El Progreso',
	   		'Jalapao'=> 'Jalapa',
	   		'Zacapa'=>'Zacapa',
	   		'Chiquimula'=> 'Chiquimula',
	   		'Retalhuleu'=>'Retalhuleu',
	   		'Suchitepéquez'=> 'Suchitepéquez',
	   		'Escuintla'=>'Escuintla',
	   		'Santa Rosa'=> 'Santa Rosa',
	   		'Jutiapa'=>'Jutiapa'], $proyectos->depa,['class'=>'form-control','required' , 'placeholder'=>'Seleccione un Departamento..'])!!}
	   </div><br>
	     
	     <div class="form-group">
	   		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>





@endsection