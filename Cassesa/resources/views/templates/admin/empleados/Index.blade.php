@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Home Empleados
@endsection                 <section id="search" class="alt">
                                
                              <!-- Search -->
							{!! Form::open(['route'=>'empleados.index', 'method'=>'Get'])!!}
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
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Foto</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Nombre Completo</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Cargo</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Proyecto</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Estado</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Editar</font></th>
     		<th style="text-align: center;"><font size="4" color="deepskyblue"  >Asignar a proyecto</font></th>
     	</thead>
        <tbody>
         
          @foreach ($empleados as $empleado)
              
           

        	<tr> 


        		<td style="text-align: center;"> 
        			<a href="{{route('empleados.perfil',$empleado->id)}}"  class="image"><img src="/images/perfiles/{{$empleado->images->name}}" 
     				   				style=" 
        			                height: 110px;
    							    width: 110px;
    							    /* los siguientes valores son independientes del tamaño del círculo */
    							    background-repeat: no-repeat;
    							    background-position: 50%;
    							    border-radius: 50%;
    							    background-size: 100% auto;" />
    				</a>
    			</td>
        		
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;"><br><br>{{$empleado->name}}</td>
        		
                <td style="color: rgb(150, 156, 156  ); text-align: center;">            
                   @if($empleado->cargo=="")
                   <br><br>No contratado
                   @else
                  <span ><br><br>{{$empleado->cargo}}</span>
                   @endif
                </td>



        		<td style="color: rgb(150, 156, 156  ); text-align: center;">
                    @if($empleado->proyecto=="")
                        <span  ><br><br>sin asignar</span>
                        @else           
                        <span ><br><br>{{$empleado->proyecto->name}}</span>
                       @endif
                
              
                </td>

        		<td style="color: rgb(150, 156, 156  ); text-align: center;">
                            @if($empleado->estado=="")

                            <br><br>Aspirante
                            @else
                            <br><br>{{$empleado->estado}}

                            @endif


                </td>

        		<td style="color: rgb(150, 156, 156  ); text-align: center;">
                    <a href="{{route('empleados.edit',$empleado->id)}}" class="image"><br><img src="{{asset('images/editar.png')}}" style="height: 70px; width: 70px;" ></a>
                </td>
        		


                <td style="color: rgb(150, 156, 156  ); text-align: center;">
                     @if($empleado->estado=="")
                         
                     @elseif($empleado->estado=="Activo")
                         <a href="{{route('asignar.edit',$empleado->id)}}" class="image"><br><img src="{{asset('images/asignar.png')}}" style="height: 70px; width: 70px;" ></a>    
                     @elseif($empleado->estado=="Incapacitado Temporal")
                     
                     @elseif($empleado->estado=="Despedido")
                      
                      @elseif($empleado->estado=="Renuncia")
                      
                    @endif

                </td>
        	




            </tr>
@endforeach 
        </tbody>           
  
    </table>

    {!!$empleados->render()!!}

<script type="text/javascript">
   @if (Session::has('message')) 
        var type = "{{Session :: get('alert-type','info') }}";
        
        switch(type){
             case 'info':
             toastr.info("{{Session::get('message')}}");
             break;
             case 'warning':
             toastr.warning("{{Session::get('message')}}");
             break;
             case 'success':
             toastr.success("{{Session::get('message')}}");
             break;
             case 'error':
             toastr.error("{{Session::get('message')}}");
             break;

        }
    @endif  
</script>
@if (Session::has('message'))
<!--
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
    
</div>  -->

<div align="left" class="alert alert-info" style="height:50px; width: 100px; ">
     {{Session::get('message')}}
</div>
@endif
 
<h1>{{Session::get('message')}}</h1>
<script  type="text/javascript">
        $.smkAlert({text:'Validate!',type:'success'});
        $.smkAlert({
        text:'El empleado a sido asignado con exito',
        type:'info',
        position:'bottom-right',
        icon:'glyphicon-time', 
        permanent:true});

        
    
</script>
 



     <script  src="{{asset('plugins/js-especiales/mensajes.js')}}"> </script>
@endsection