@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
NIT
@endsection



<div align="center">
	<!--boton para el RTN -->
	<a style=" text-decoration: none; text-decoration-line: none;" href="{{route('empleados.indexRTNCREATE',$empleados->id)}}"><font  class="glyphicon glyphicon-folder-open" size="4"> Actualizar-NIT  </font></a>
</div>
						

				
	<div >			

@foreach ($empleados->rtn as $rtn)
   

		<p style="">
			<img title="El Documento fue actualizado: {{$rtn->created_at->diffForHumans()}}" class="img-thumbnail" src="/images/rtn/{{$rtn->name}}" 
			style="height: 600px; width: 400px; overflow: hidden; float: left; margin: 10px 10px 0 0;" >
			
		 
		 </p>

		   
 @endforeach

</div>


@endsection