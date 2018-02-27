<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Digital</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- bootstrap & fontawesome -->

		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('assets/fonts/fonts.googleapis.com.css')}}">

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style">

		<!-- ace settings handler -->
		<script src="{{asset('assets/js/ace-extra.min.js')}}"></script>


	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="/" class="navbar-brand">
						<small>
							<i class="fa fa"></i>
							Sistema de Tarjetas Unilever Comayagua
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!--<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">-->
									<small>Bienvenido {{ Auth::user()->name }}</small>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<!--enlace para configuracion-->
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Ajustes
									</a>
								</li>
<!--enlace para perfil de usuario-->
								<li>
									<a href="">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
										<i class="ace-icon fa fa-power-off"></i>
										Cerrar Sesion
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<style media="screen">
							.logoU { position:relative top: 5px; left: 10px; padding: 5px; float:none; width: 95px; }
						</style>

							<img class="logoU" src="{{asset('images/logo.png')}}" id="logo">
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="/">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Pagina Principal </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tags"></i>
							<span class="menu-text">
								Tarjetas
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

            <b class="arrow"></b>
						<ul class="submenu">

							<li class="">
								<a href="/tarjetas">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado de todas las Tarjetas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/mis-tarjetas">
									<i class="menu-icon fa fa-caret-right"></i>
									Mis Tarjetas Realizadas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/tarjetas-asignadas">
									<i class="menu-icon fa fa-caret-right"></i>
									Mis Tarjetas Asignadas
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li> <!--Fin de primer menu de tarjetas-->



					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Areas </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="/areas">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado de Areas
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="areas/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear Nueva
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-gavel"></i>
							<span class="menu-text"> Equipos </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="/equipos">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado de Equipos
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/equipos/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear Nuevo
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> Categorias </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="/categorias">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Categorias
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/categorias/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear una Categoria
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-th"></i>
							<span class="menu-text">Eventos</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="/eventos">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Eventos
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/evento/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear un Nuevo Evento
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text">Causas</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="/causas">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Causas
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/causas/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear Nueva Causa
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">Plantas</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="/plantas">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Plantas
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/plantas/create">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear Nueva Planta
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Empleados</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="/users">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Usuarios
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Crear Nuevo Empleado
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="/roles">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista de Roles
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="/">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
<div class="container-fluid">
	 @yield('contenido')
</div>


			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Copyright ©   2018
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->



	<script src="{{asset('assets/js/jquery.2.1.1.min.js')}}"></script>

	<!--<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
	</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>-->

		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.flot.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.flot.pie.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.flot.resize.min.js')}}"></script>

		<!-- page specific plugin scripts -->
		<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/dataTables.tableTools.min.js')}}"></script>
		<script src="{{asset('assets/js/dataTables.colVis.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('assets/js/ace.min.js')}}"></script>
@yield('scripts')
	</body>
</html>
