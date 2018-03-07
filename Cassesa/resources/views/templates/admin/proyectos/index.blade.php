@extends('templates.main')

@section('content')

<!--
        
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

 Header -->
						

								
@section('subtitle')
Home Proyectos
@endsection


                            <section id="search" class="alt">
                                
                              <!-- Search -->
                            {!! Form::open(['route'=>'proyectos.index', 'method'=>'Get'])!!}
                            <!--
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Buscar" />
                                    </form>
                                </section>
                            -->
                            {!!Form::text('name', null,[ 'id'=>'query','placeholder'=>'Buscar'])!!}

                            {!!Form::close()!!}    
                                </section>



	<table class="table table-striped">
     	<thead>
     		<th style="text-align: center;"><font size="4" color="deepskyblue" >Proyecto</th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue" >Direccion</th>
            <th style="text-align: center;"><font size="4" color="deepskyblue" >Departamento</th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue" >Editar</th> 		
     	</thead>
        <tbody>
    @foreach($proyectos as $proyecto)
        	<tr> 
        		
        		<td style="color: rgb(150, 156, 156  ); text-align: center;" >{{$proyecto->name}}</td>
        		<td style="color: rgb(150, 156, 156  ); text-align: center;" >{{$proyecto->direccion}}</td>
        		<td style="color: rgb(150, 156, 156  ); text-align: center;" >{{$proyecto->depa}}</td>
        		<td style="color: rgb(150, 156, 156  ); text-align: center;" ><a href="{{route('proyectos.edit',$proyecto->id)}}" class="image"><img src="{{asset('images/edit.jpg')}}" style="height: 50px; width: 50px;" ></a></td>
        	</tr>
    @endforeach        
         </tbody>
    
     </table>
     <!-- Mostramos el paginado -->
      {!! $proyectos->render() !!}
   


@endsection