<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Cassesa')</title>

       
		  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		  <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		  <link rel="stylesheet" href="{{ asset('plugins/home/assets/css/main.css')}}" />
          <link rel="icon" type="image/png" href="{{asset('images/icon/camaras.png')}}" />

 
        	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	
            
			            
           <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
		   <script src="{{ asset('plugins/home/assets/js/jquery.min.js')}}"></script>
  		   <script  src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"> </script>

            {!!Html::style('assets/css/smoke.css') !!}

           <link rel="stylesheet" type="text/css" href="{{asset('assets/css/smoke.css')}}">
           <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/build/toastr.min.css')}}">
 
</head>
<body>
   <!--Barra de navegacion del programa 
	@include('templates.partials.nav') -->
     


   

<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main" style="background-color: white;">
						<div class="inner">


                                    <header id="header">
									<a href="index.html" class="logo"><strong>@yield('subtitle','Home')</strong> CASSESA</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
                								</header>
                         <br>
                         @include('flash::message') 
                        
				 			@yield('content')
            <!--en esta parte se iran agregando las cosas a mostra asi no afectara al menu de la aplicacion 
               -->



							<!-- Section de la parte de abajo -->
								<section>
									<header class="major">
										
									</header>
									<div class="posts">
										
									</div>
								</section>

						</div>
					</div>


				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Buscar" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="#">Inicio</a></li>
								
										<li>
											<span class="opener">Proyectos</span>
											<ul>
												<li><a href="{{route('proyectos.create')}}">Agregar Proyectos</a></li>
												<li><a href="{{route('proyectos.index')}}">Buscar Proyectos</a></li>
												
											</ul>
										</li>
										
										<li>
											<span class="opener">Empleados</span>
											<ul>
												<li><a href="{{route('empleados.create')}}">Agregar Empleados</a></li>
												<li><a href="{{route('empleados.index')}}">Buscar empleados</a></li>
											</ul>
										</li>
										
										<li>
											<span class="opener">Area contable</span>
											<ul>
												<li><a href="#">Planillas</a></li>
												<li><a href="#">Dias laborados</a></li>
												
											</ul>
										</li>

										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Servicios</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="{{asset('images/casa.jpg')}}" alt="" /></a>
											<p>La mejor seguridad para tu casa desde todos los angulos posibles</p>
										</article>
										<article>
											<a href="#" class="image"><img src="{{asset('images/humo.jpg')}}" alt="" /></a>
											<p>Te brindamos una proteccion contra incendios mientras tu estes fuera</p>
										</article>
										<article>
											<a href="#" class="image"><img src="{{asset('images/laser.jpg')}}" alt="" /></a>
											<p>Con la ultima tecnologia en vigilancia desde un central con personal capacitado</p>
										</article>
									</div>
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Cassesa</h2>
									</header>
									<p>Somos una empresa dedicada a servirte y brindarte un servicio de calidad. Nuestra prioridad son nuestros clientes</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">Casssesa@gmail.com</a></li>
										<li class="fa-phone">(504) 000-0000</li>
										<li class="fa-home">1234 Direccion #8254<br />
										Localidad, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; CASSESA. All rights reserved. <a href="https://html5up.net"> Coorporaciones</a>.</p>
								</footer>

						</div>
					</div>

			</div>














             <!-- Scripts del cv JavaScript -->
			<script src="{{ asset('plugins/cv/sheldon/jquery-1.js')}}"></script>
			<script src="{{ asset('plugins/cv/sheldon/validate.js')}}"></script>
			<!--[if lt IE 9]>
			<script src="scripts/placeholder.js"></script>
			<![endif]-->
			<script src="{{ asset('plugins/cv/sheldon/plugins.js')}}"></script>
		
   

         	<!-- Scripts -->
			<script src="{{ asset('plugins/home/assets/js/jquery.min.js')}}"></script>
			<script src="{{ asset('plugins/home/assets/js/skel.min.js')}}"></script>
			<script src="{{ asset('plugins/home/assets/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js')}}></script><![endif]-->
			<script src="{{ asset('plugins/home/assets/js/main.js')}}"></script>
             
            <script src="{{ asset('assets/js/smoke.js')}}"></script>
            <script src="{{ asset('assets/lang/es.js')}}"></script>

			{!!Html::script('assets/js/smoke.js') !!}
			{!!Html::script('assets/lang/es.js') !!}


			<script  src="{{asset('plugins/toastr/build/toastr.min.js')}}"> </script>

</body>
</html>