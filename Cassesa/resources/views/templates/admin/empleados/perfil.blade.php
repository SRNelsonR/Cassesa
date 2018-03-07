@extends('templates.main')

@section('content')
								

		@section('subtitle')
		
		Perfil     

		@endsection

            <!-- Fichiers CSS -->
			<link rel="stylesheet" href="{{ asset('plugins/cv/sheldon/reset.css')}}">
			<!--[if lt IE 9]> 
				<link rel="stylesheet" href="css/cv.css" media="screen">
			<![endif]-->
			<link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('plugins/cv/sheldon/mobile.css')}}">

			<link rel="stylesheet" media="screen and (min-width:481px)" href="{{ asset('plugins/cv/sheldon/cv.css')}}">
			<link rel="stylesheet" media="print" href="{{ asset('plugins/cv/sheldon/print.css')}}">
     




	<header role="banner">
		<div class="container">
				<hgroup>
					<!--Nombe del empleado-->
					<h1>{{$empleados->name}}</h1>
					
					<h2> {{$empleados->identidad}} </h2>
					
					<!--cargo del empleado-->
                    @if($empleados->cargo=="")
                    <h3 style="background-color: rgb(255, 232, 0); color: white; border-radius: 5px; padding: 4px; ">solicitante</h3>
                    @else           
                    <h3 style="color:rgb(0,10,120);">{{$empleados->cargo}}</h3>
                    @endif

                  

                    @if($empleados->estado=="")
                	<div style="background: rgba(240, 244, 8,1); height: 40px; width: 150px; border-radius: 10px; padding-top:8px;">
                  	     <a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; "><font style="padding: 8px;margin-top:  8px;" size="6"  > Aspirante</font></a>
				    </div>
                    @elseif($empleados->estado=="Activo")           
                    
                    <div style="background: rgba(10,170,20,1); height: 40px; width: 100px; border-radius: 10px; padding-top:8px;">
                  	     <a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; "><font style="padding: 8px;margin-top:  8px;" size="6"  > {{$empleados->estado}}</font></a>
				    </div>
				     @elseif($empleados->estado=="Despedido")           
                    
                    <div style="background: rgb(255, 25, 25); height: 40px; width: 165px; border-radius: 10px; padding-top:8px;">
                  	     <a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; "><font style="padding: 8px;margin-top:  8px;" size="6"  > {{$empleados->estado}}</font></a>
				    </div>
				    @elseif($empleados->estado=="Incapacitado Temporal")           
                    
                    <div style="background: rgb(130, 227, 7); height: 40px; width: 335px; border-radius: 10px; padding-top:8px;">
                  	     <a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; width:  300px; padding-top: 20; "><font style="padding: 8px; margin-top:  8px; width:  300px;" size="6"  > Incapacitado temporal</font></a>
				    </div>
				    @elseif($empleados->estado=="Renuncia")           
                    
                    <div style="background: rgb(255, 25, 25); height: 40px; width: 165px; border-radius: 10px; padding-top:8px;">
                  	     <a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; "><font style="padding: 8px;margin-top:  8px;" size="6"  > {{$empleados->estado}}</font></a>
				    </div>
                    @endif    


                   			<br>						
                        <!--Codigo para ver cuando se vencieron los documentos de los antecedentes penales-->           
                        <?php 
                        #recorre a empleados para mostrar su antecedentes penales
                        $datos='No tiene antecedentes Peneales';
                        foreach($empleados->atc_penales as $atc_penales){                     
                          
                            $datos= $atc_penales->created_at;                            
                                                  
                                                       }
                                                       
                            #compara el valor obenido del antecedentes penales para hacer una condicion y ver cuando se vencen sus papeles
                                if ($datos=='No tiene antecedentes Peneales') {
                                                     echo "<br><h5 class='glyphicon glyphicon-remove-sign' style='color:red;'> Sin antecedentes penales</h5>";
                                                                                    



                                                                               }  
                                else{
                                      $dato= $datos->diffForHumans(); 
                                                                
                                           if($dato=="hace 6 meses"||$dato=="hace 7 meses"||$dato=="hace 8 meses" ||$dato=="hace 9 meses" ||$dato=="hace 10 meses" || $dato=="hace 11 meses"||$dato=="hace 1 año" ||$dato=="hace 2 años"||$dato=="hace 3 años" ||$dato=="hace 4 años" ||$dato=="hace 5 años"||$dato=="hace 6 años"||$dato=="hace 7 años" ||$dato=="hace 8 años"){
                                                      
                                                 echo "<br><h5 class='glyphicon glyphicon-remove-sign' style='color:red;'> Antecedentes penales</h5>";
                                                                            }
                                           else{ 
                                                  echo "<br><h6 class='glyphicon glyphicon-ok-sign' style='color:rgba(10,170,20,1);' > Antecedentes penales</h6>"; 
                                               }
                                     }               
                                  
                         ?>

                        <!--Codigo para ver cuando se vencieron los documentos de los antecedentes penales-->           
                        <?php 
                        #recorre a empleados para mostrar su antecedentes penales
                        $pol='No tiene antecedentes Policiales';
                        foreach($empleados->atc_policiales as $atc_policiales){                     
                          
                            $pol= $atc_policiales->created_at;                            
                                                  
                                                       }
                                                       
                            #compara el valor obenido del antecedentes penales para hacer una condicion y ver cuando se vencen sus papeles
                                if ($pol=='No tiene antecedentes Policiales') {
                                                     echo "<br><h6 class='glyphicon glyphicon-remove-sign' style='color:red;'> Sin antecedentes policiales</h6>";                                
                                                                               }  
                                else{
                                      $po= $pol->diffForHumans(); 
                                                                
                                           if($po=="hace 6 meses"||$po=="hace 7 meses"||$po=="hace 8 meses" ||$po=="hace 9 meses" ||$po=="hace 10 meses" || $po=="hace 11 meses"||$po=="hace 1 año" ||$po=="hace 2 años"||$po=="hace 3 años" ||$po=="hace 4 años" ||$po=="hace 5 años"||$po=="hace 6 años"||$po=="hace 7 años" ||$po=="hace 8 años"){
                                                      
                                                  echo "<br><h6 class='glyphicon glyphicon-remove-sign' style='color:red;'> Antecedentes policiales</h6>"; 
                                                                            }
                                           else{ 
                                                  echo "<br><h6 class='glyphicon glyphicon-ok-sign' style='color:rgba(10,170,20,1);'> Antecedentes policiales</h6>"; 
                                               }
                                     }               
                                  
                         ?>          


					<!-- Modal de la referencia de los empleados -->
					<div id="myModal"   class="modal fade" role="dialog">
					  <div class="modal-dialog" >

					    <!-- Modal content-->
					    <div class="modal-content" ">
					      <div class="modal-header">
					        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
					        <h4 class="modal-title" align="center" style="color: red; ">Referencia</h4>
					      </div>
					      <div class="modal-body">
					        <font><b>Nombre:</b> {{$empleados->name_refe}}<br></font>
					        
					        <font><b>Identidad:</b> {{$empleados->identidad_refe}}<br></font>
					        <font><b>Telefono:</b> {{$empleados->telefono_refe}}<br></font>
					        
					        <font><b>Email:</b> {{$empleados->email_refe}}<br></font>
					      	<font><b>Direccion:</b> <br><font style="color: grey;">{{$empleados->direccion_refe}}</font></font>
					        <br>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>




					<!-- Modal del estado de los empleados -->
					<div id="myModal_estado" class="modal fade" role="dialog">
					  <div  class="modal-dialog">

					    <!-- Modal content-->
					    <div  class="modal-content">
					      <div class="modal-header">
					      	
					        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
					        <h4 class="modal-title" align="center" style="color:red;" >Estado del empleado</h4>
					      </div>
					      <div class="modal-body">
					        <font><b>Estado:</b> {{$empleados->estado}}</font><br>
					        
					       	<font><b>Descripcion:</b> <br><font style="color: grey;">{{$empleados->descripcion}}</font></font>
					        <br>

					       
					      </div>
					      <div class="modal-footer">
					      	<div align="left">
					      	    <font >Fecha de Actualizacion: {{$empleados->fecha_estado}}</font>
					      	</div>
					        <button type="button" class="btn" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>






					




                    					<!-- Trigger the modal with a button -->
					<br>
					<br>
							
					<!-- Trigger the modal de la referencia -->
						<a  data-toggle="modal" data-target="#myModal">
					   <font class="glyphicon glyphicon-user" size="4.8" face="arial"> Referencia</font>
					    </a>
					    <br>	
					    
                         
                        <!-- Modal del proyecto que fue asiganado -->

					@if(sizeof($empleados->proyecto)==0)

					@else
					 <!-- Trigger the modal del royecto -->
						<a  data-toggle="modal" data-target="#myProyecto">
					   <font class="glyphicon glyphicon-briefcase" size="4.8" face="arial"> Proyecto</font>
					    </a>
                    

					<div id="myProyecto" class="modal fade" role="dialog">
					  <div  class="modal-dialog">

					    <!-- Modal content-->
					    <div  class="modal-content">
					      <div class="modal-header">
					      	
					        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
					        <h4 class="modal-title" align="center" style="color:red;" >Proyecto asignado</h4>
					      </div>
					      <div class="modal-body">
					        <font><b>Nombre del proyecto:</b> {{$empleados->proyecto->name}}</font><br>
					        <font><b>Departamento:</b> {{$empleados->proyecto->depa}}</font><br>
					       	<font><b>Direccion:</b> <br><font style="color: grey;">{{$empleados->proyecto->direccion}}</font></font>
					        <br>

					       
					      </div>
					      <div class="modal-footer">
					      	<div align="left">
					      	    <font >Fecha de asignacion: {{$empleados->fecha_proyecto}}</font>
					      	</div>
					        <button type="button" class="btn" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>

                    @endif
















					   




				</hgroup>



   			    <figure>			
			        <img src="/images/perfiles/{{ $empleados->images->name}}" alt="no encontro la imagen">
			        <br>
			        <br>
			        <br>
				        
				        
				          
				        	<a  href="{{route('asignar_estado.edit',$empleados->id)}}"><font class="glyphicon glyphicon-plus" size="4"> Editar-Estado</font></a>

				        
                    <br>
                       
                         <a  href="{{route('asignar_cargo.edit',$empleados->id)}}"><font class="glyphicon glyphicon-plus" size="4"> Editar-Cargo</font></a>
                       
				</figure>

		</div>
	</header>
	

	<!-- Contact -->
	<section class="contactform clearfix">
		<div class="container_16">
			<h3>Contactez-moi</h3>
			<p>Remplissez le formulaire ci-dessous afin de m'envoyer un message. Je vous répondrais dans les plus bref délai. 
			<br><em>Tous les champs sont requis.</em></p>
			<form novalidate="novalidate" method="post" action="#" name="contact" class="grid_16">
				<p class="grid_10"><textarea name="message" placeholder="Votre message" class="required"></textarea></p>
				<p class="grid_6">
					<input name="nom" placeholder="Nom - Prénom" class="required" type="text">
					<input name="email" placeholder="Adresse email" class="required" type="email">	
					<input name="envoi" value="Envoyer le message" class="required" type="submit">
					<span class="messageform"></span>
				</p>
			</form>
		</div>
	</section>
	
	<!-- Corps -->
	<section role="main" class="container_16 clearfix">
		<div class="grid_16">

			<!-- Formacion academica -->
			<div class="grid_8 apropos">
				<h3>Formacion Academica</h3>
				
				<p>{{$empleados->estudios}} </p>
			</div>
			

			<!-- Formacion Profesional -->
			<div class="grid_8 apropos">
				<h3>Formacion Profesional</h3>
				
				<p>{{$empleados->cursos}}</p>
				   <br>
				   <br>
			</div>
			

				<!-- Experiencia laboral -->
			<div class="grid_8 apropos">
				<h3>Experiencia laboral</h3>
	
				<p>{{$empleados->experiencia}}</p>
			</div>
			

			
			<!-- Aptitudes -->
			<div class="grid_8 apropos">
				<h3>Aptitudes</h3>
				<ul>
					
						
					<p>{{$empleados->aptitudes}}</p>
					   <br>
				   <br>
					
					
			</div>
		
		
			<!-- Contact -->
			<div class="grid_8 contact">
				<h3>Contacto</h3>
				<ul>
					<li class="lieu">Guatemala</li>
					<li class="phone">{{$empleados->telefono}}</li>
					<li class="mail"><a href="#">{{$empleados->email}}</a></li>
					<li class="site"><a href="#">www.mon-site.fr</a></li>
					
				</ul>
			</div>


			<!-- Informacion Adicional -->
			<div class="grid_8 apropos">
				<h3>Direccion</h3>
				<p>{{$empleados->direccion}}</p>
			</div>
		
	</section>

	

							


					<br>

					<br>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">

					      <div class="modal-header">
					        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
					        <h4 class="modal-title" style="padding-left: 40%; color: red;">Referencia</h4>
					      </div>

					      <div class="modal-body">
					        <p><b>Nombre:</b> {{$empleados->name_refe}}</p>
					        
					        <p><b>Identidad:</b> {{$empleados->identidad_refe}}</p>
					        <p><b>Telefono:</b> {{$empleados->telefono_refe}}</p>
					        
					        <p><b>Email:</b> {{$empleados->email_refe}}</p>
					      	<p><b>Direccion:</b> <br><p style="color: grey;">{{$empleados->direccion_refe}}</p></p>
					        <br>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>
<footer class="ariel">
                  <div align="center" >
						<!--boton para el RTN -->
						<a href="{{route('empleados.indexRTN',$empleados->id)}}"><font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-folder-open" size="5"> NIT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a>
						
						<!--boton para los antecedentes penales -->
						<a href="{{route('empleados.indexATCPE',$empleados->id)}}"><font class="glyphicon glyphicon-folder-open" size="5"> PENALES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a>
						
						<!--boton para los antecedentes policiales -->
						<a href="{{route('empleados.indexATCPO',$empleados->id)}}"><font class="glyphicon glyphicon-folder-open" size="5"> POLICIALES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a>
				  </div>

</footer>

@endsection