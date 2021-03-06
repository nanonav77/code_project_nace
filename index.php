<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Default Layout | Okler Themes | Porto-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

  
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<style>
			.pt-3-half {
				padding-top: 1.4rem;
			}
		</style>

	</head>
	<body onload="listarDiasSemana('campo_fecha_produccion_colaboradores');buscarFincaRegistroProduccion('select_fincas_produccion');">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span id="span_nombre_usuario_mostrar" class="name"></span>
								<span id="span_tipo_usuario_mostrar" class="role"></span>
								<span id="span_identificacion_no_mostrar" class="role" style="display: none;"></span>
								
							</div>		
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Mi Perfil</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Bloquear Pantalla</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="signin.php"><i class="fa fa-power-off"></i> Salir</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Menú de Opciones
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Principal</span>
										</a>
									</li>
									<li>
										<a href="javascript:seccion_crear_colaborador();obtenerIdNuevoColaborador();">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Registrar Colaborador</span>
										</a>
									</li>
									<li>
										<a href="javascript:seccion_actualizar_colaborador(1);buscarColaboradorActualizar();">
											<i class="fa fa-bars" aria-hidden="true"></i>
											<span>Actualizar Colaborador</span>
										</a>
									</li>
									
									<li>
										<a href="javascript:seccion_eliminar_colaborador();buscarColaboradorEliminar();">
											<i class="fa fa-times" aria-hidden="true"></i>
											<span>Activar/Inactivar Colaborador</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-pencil" aria-hidden="true"></i>
											<span>Registro Producción</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="javascript:seccion_registro_control_cajuelas();listarDiasSemana('campo_fecha_produccion_colaboradores');buscarFincaRegistroProduccion('select_fincas_produccion');">
												   Registro Cajuelas Colaborador
												</a>
											</li>
											<li>
												<a href="javascript:seccion_registro_control_cajuelas_fincas();listarDiasSemana('campo_fecha_produccion_fincas');buscarFincaRegistroProduccion('select_fincas_cajuelas_finca');">
												   Registro Cajuelas Finca
												</a>
											</li>																						
										</ul>
									</li>
									<li>
										<a href="">
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Consulta Producción</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Fincas</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="javascript:seccion_registro_finca();obtenerIdNuevaFinca();buscarPropietariosRegistroFincas();">
													 Registrar Fincas
												</a>
											</li>
											<li>
												<a href="javascript:seccion_actualizacion_finca(1);buscarFincaActualizar();">
													 Actualizar Fincas
												</a>
											</li>
											<li>
												<a href="tables-responsive.html">
													 Eliminar Fincas
												</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="maps-google-maps.html">
													 Basic
												</a>
											</li>
											<li>
												<a href="maps-google-maps-builder.html">
													 Map Builder
												</a>
											</li>
											<li>
												<a href="maps-vector.html">
													 Vector
												</a>
											</li>
										</ul>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Menu Levels</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a>First Level</a>
											</li>
											<li class="nav-parent">
												<a>Second Level</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Third Level</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li>
														<a>Second Level Link #1</a>
													</li>
													<li>
														<a>Second Level Link #2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End <em class="not-included">(Not Included)</em></span>
										</a>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Porto HTML5 Template</a></li>
										<li><a href="#">Tucson Template</a></li>
										<li><a href="#">Porto Admin</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Company Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Stat 1</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Default</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<!-- sección para llevar a cabo la inserción de un usuario -->

						<div class="col-md-12" id="seccion_crear_colaborador" style="display: none;">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										
									</div>

									<h2 class="panel-title">Registrar Colaborador</h2>

								</header>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">N° Colaborador</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-lock"></i></span>
													</span>
													<input readonly="readonly" type="text" id="numero_insert_colaborator" class="form-control">
												</div>		
												
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Nombre Completo</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
													<input type="text" id="name_insert_colaborator" class="form-control">
												</div>		
												
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Identificación</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-key"></i></span>
													</span>
													<input type="text" id="ide_insert_colaborator" class="form-control">
												</div>		
												
											</div>
										</div>
									</div>
								</br>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Teléfono</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-chevron-right"></i></span>
													</span>
													<input type="text" id="tel_insert_colaborator" class="form-control">
												</div>		
												
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Correo Electrónico</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-envelope"></i></span>
													</span>
													<input type="text" id="email_insert_colaborator" class="form-control">
												</div>		
												
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Otro</label>
												
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-chevron-right"></i></span>
													</span>
													<input type="textarea" class="form-control">
												</div>		
												
											</div>
										</div>
									</div>
								</div>
								<footer class="panel-footer">
									<div class="form-group">
										<label class="col-md-3 control-label"></label>
										<div class="col-md-5">
											<button type="button" id="button_insert_colaborator" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Crear Colaborador</button>
											
										</div>
									</div>
								</footer>
								<button style="display: none;" id="default-success-insert-col"  class="mt-sm mb-sm btn btn-success">Success</button>
								<button style="display: none;" id="default-error-insert-col" class="mt-sm mb-sm btn btn-danger">Error</button>
							</section>
						
					</div>
					
					<!-- FIN sección para llevar a cabo la inserción de un usuario -->


					<!-- INICIO ACTUALIZACIÓN USUARIO -->

					<!--  sección para llevar a cabo la actualización de un usuario -->

					<div class="col-md-12" id="seccion_buscar_colaborador_act" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
				
								<h2 class="panel-title">Buscar Colaborador</h2>
							</header>
							<div class="panel-body">
								<form class="form-horizontal form-bordered" method="get">
																				
									<div class="form-group">
										<label class="col-md-3 control-label">Nombre/N° Colaborador </label>
										<div class="col-md-6">
											<div class="input-group input-search">
												<input type="text" class="form-control"  id="buscar_update_colaboradores" placeholder="Buscar..." oninput="buscarColaboradorActualizar();">
												<span class="input-group-btn">
													<button class="btn btn-default" id="button_buscar_update_colaboradores" type="button"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
																							
								</form>
							</div>
						</section>
							
					</div>

					<div class="col-md-12" id="seccion_lista_colaboradores_act" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								
								</div>
				
								<h2 class="panel-title">Lista Colaboradores</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">									
									<table class="table table-hover mb-none text-center" id="table_update_colaboradores">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Nombre Completo</th>
												<th class="text-center">Identificación</th>
												<th class="text-center">Teléfono</th>
												<th class="text-center">Email</th>
												<th class="text-center">Actualizar</th>
											</tr>
										</thead>										
									</table>
								</div>
							</div>
						</section>
							
					</div>
				
					<div class="col-md-12" id="panel_actualizar_colaborador" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>

								<h2 class="panel-title">Actualizar Colaborador</h2>

							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">N° Colaborador</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-lock"></i></span>
												</span>
												<input readonly="readonly" type="text" id="number_update_colaborator" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Nombre Completo</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-user"></i></span>
												</span>
												<input type="text" id="name_update_colaborator" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Identificación</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-key"></i></span>
												</span>
												<input type="text" id="ide_update_colaborator" class="form-control">
											</div>		
											
										</div>
									</div>
								</div>
							</br>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Teléfono</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-chevron-right"></i></span>
												</span>
												<input type="text" id="tel_update_colaborator" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Correo Electrónico</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-envelope"></i></span>
												</span>
												<input type="text" id="email_update_colaborator" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Otro</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-chevron-right"></i></span>
												</span>
												<input type="textarea" class="form-control">
											</div>		
											
										</div>
									</div>
								</div>
							</div>
							<footer class="panel-footer">
								<div class="form-group">
										
									<div class="col-md-2">
										<button onclick="seccion_actualizar_colaborador(2);buscarColaboradorActualizar();" type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-chevron-left"></i> Atrás</button>
									</div>
									<div class="col-md-7">
										<button id="button_update_colaborator" type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Actualizar Colaborador</button>
									</div>
								</div>
							</footer>
							<button style="display: none;" id="default-success-update-col"  class="mt-sm mb-sm btn btn-success">Success</button>
							<button style="display: none;" id="default-error-update-col" class="mt-sm mb-sm btn btn-danger">Error</button>
						</section>
					
				   </div>
				   					
					<!-- FIN ACTUALIZACIÓN USUARIO -->

					<!-- INICIO ELIMINACIÓN USUARIO -->

					<!--  sección para llevar a cabo la eliminación de un usuario -->

					<div class="col-md-12" id="seccion_buscar_colaborador_del" style="display: none;">
						<section class="panel" >
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
				
								<h2 class="panel-title">Buscar Colaborador</h2>
							</header>
							<div class="panel-body">
								<form class="form-horizontal form-bordered" method="get">
																				
									<div class="form-group">
										<label class="col-md-3 control-label">Nombre/N° Colaborador </label>
										<div class="col-md-6">
											<div class="input-group input-search">
												<input type="text" class="form-control"  id="buscar_delete_colaboradores" placeholder="Buscar..." oninput="buscarColaboradorEliminar();">
												<span class="input-group-btn">
													<button id="button_buscar_delete_colaboradores" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
																							
								</form>
							</div>
						</section>
							
					</div>

					<div class="col-md-12" id="seccion_lista_colaboradores_del" style="display: none;">
						<section class="panel" >
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								
								</div>
				
								<h2 class="panel-title">Lista Colaboradores</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table id="table_delete_colaboradores" class="table table-hover mb-none text-center">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Nombre Completo</th>
												<th class="text-center">Identificación</th>
												<th class="text-center">Teléfono</th>
												<th class="text-center">Email</th>
												<th class="text-center">Estado</th>
												<th class="text-center">Acción</th>
											</tr>
										</thead>
										
									</table>
								</div>
							</div>
						</section>
						<button style="display: none;" id="default-success-delete-col"  class="mt-sm mb-sm btn btn-success">Success</button>
						<button style="display: none;" id="default-error-delete-col" class="mt-sm mb-sm btn btn-danger">Error</button>
							
					</div>

					<!-- FIN ELIMINACIÓN USUARIO -->

					<!-- INICIO REGISTRO CAJUELAS -->

					<!--  sección para llevar a cabo el registro y control de cajuelas -->
					
					<!--  panel para encontrar y seleccionar un colaborador -->

					<div class="col-md-12" id="seccion_registro_cajuelas">
											
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
									</div>
					
									<h2 class="panel-title">Registro y Control de Cajuelas</h2>
								</header>
								<div class="panel-body">																	
				
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Nombre/N° Colaborador </label>
												<div class="input-group input-search">
													<input type="text" class="form-control"  id="buscar_produccion_insert_colaboradores" placeholder="Buscar..." oninput="obtenerCajuelasRegistradas();">
													<span class="input-group-btn">
														<button id="button_buscar_produccion_insert_colaboradores" oninput="obtenerCajuelasRegistradas();" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</div>
										</div>
																		
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Seleccionar Fecha</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input id="campo_fecha_produccion_colaboradores" type="text" data-plugin-datepicker class="form-control" onchange="obtenerCajuelasRegistradas();" >
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Seleccionar Finca</label>
													<select id="select_fincas_produccion"  class="form-control mb-md" onchange="obtenerCajuelasRegistradas();">
																																					
													</select>					
											</div>
										</div>												
										
								</div>															

							</section>						
					</div>

					<div class="col-md-12" id="seccion_lista_cajuelas_registro">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Cajuelas Diarias</h2>
							</header>
							<div class="panel-body">								
								<div id="table_control_produccion" class="table-editable">									
									<table  id="table_control_produccion_editable" class="table table-bordered table-responsive-md table-striped text-center">
									  <thead>
										<tr>
										  <th class="text-center">N°</th>
										  <th class="text-center">Colaborador</th>
										  <th class="text-center">Fecha</th>
										  <th class="text-center">Cajuelas</th>
										  <th class="text-center">Cuartillos</th>
										  <th class="text-center">Acción</th>
										</tr>
									  </thead>									  
									</table>
								  </div>
							</div>
						</section>

						<!-- BOTONES ESCONDIDOS PARA NOTIFICAR EL ESTADO DE LA ACCIÓN DEL USUARIO -->
						<button style="display: none;" id="default-success-insert-produccion-col"  class="mt-sm mb-sm btn btn-success">Success</button>
						<button style="display: none;" id="default-error-insert-produccion-col" class="mt-sm mb-sm btn btn-danger">Error</button>
						<button style="display: none;" id="default-success-update-produccion-col"  class="mt-sm mb-sm btn btn-success">Success</button>
						<button style="display: none;" id="default-error-update-produccion-col" class="mt-sm mb-sm btn btn-danger">Error</button>	
					
					</div>

					<!-- FIN REGISTRO CAJUELAS -->

					<!-- INICIO REGISTRO CAJUELAS FINCA -->

					<!--  sección para llevar a cabo el registro y control de cajuelas de una finca-->
						
					<div class="col-md-12" id="seccion_registro_cajuelas_finca" style="display: none;">
											
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
				
								<h2 class="panel-title">Control de Cajuelas por Finca</h2>
							</header>
							<div class="panel-body">		

								<div class="col-sm-3">
									<div class="form-group">
										<label class="control-label">Número Recibo</label>
										<div class="input-group input-group-icon">
											<span class="input-group-addon">
												<span class="icon"><i class="fa fa-list-alt"></i></span>
											</span>
											<input type="text" id="number_recibo" class="form-control">
										</div>				
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label class="control-label">Seleccionar Fecha</label>
										
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</span>
												<input id="campo_fecha_produccion_fincas" type="text" data-plugin-datepicker class="form-control" onchange="obtenerProduccionFincaVerificacion();">
											</div>
													
									</div>
								</div>   

								<div class="col-sm-5">
									<div class="form-group">
										<label class="control-label">Seleccionar Finca</label>
											<select id="select_fincas_cajuelas_finca"  class="form-control mb-md" onchange="obtenerProduccionFincaVerificacion();">
																																				
											</select>					
									</div>
								</div>	
								
																							
								<div class="col-sm-3">
									<div class="form-group">
										<label class="control-label">Cajuelas</label>
										<div>
											<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 1000 }'>
												<div class="input-group">
													<input type="text" id="cajuelas_produccion_finca" class="spinner-input form-control" maxlength="3">
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn btn-default spinner-up">
															<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn btn-default spinner-down">
															<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>											
										</div>							
									</div>
								</div>
								
								<div class="col-sm-3">
									<div class="form-group">
										<label class="control-label">Cuartillos</label>
										<div>
											<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 3 }'>
												<div class="input-group">
													<input type="text" id="cuartillos_produccion_finca" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn btn-default spinner-up">
															<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn btn-default spinner-down">
															<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>											
										</div>			
									</div>
								</div>

								<div class="col-sm-3">
									<div class="form-group">
										<label class="control-label"></label>
										<div>
											<button type="button" id="button_registrar_produccion_finca" class="mb-xs mt-xs mr-xs btn btn-success btn-block">Registrar</button>
											<button type="button" id="button_actualizar_produccion_finca" class="mb-xs mt-xs mr-xs btn btn-primary btn-block" style="display: none;">Actualizar</button>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="form-group">
										<label class="control-label"></label>
										<div>
											<button type="button" id="button_borrar_produccion_finca" class="mb-xs mt-xs mr-xs btn btn-danger btn-block" disabled>Borrar</button>
										</div>
									</div>
								</div>

								<!-- BOTONES ESCONDIDOS PARA NOTIFICAR EL ESTADO DE LA ACCIÓN DEL USUARIO -->
								<button style="display: none;" id="default-success-delete-pf"  class="mt-sm mb-sm btn btn-success">Success</button>
								<button style="display: none;" id="default-error-delete-pf" class="mt-sm mb-sm btn btn-danger">Error</button>
								
							</div>					
								
						</section>						
				</div>				

				<!-- FIN REGISTRO CAJUELAS POR FINCA -->

				<!-- INICIO CONSULTA PRODUCCIÓN -->

				<!--  sección para llevar a cabo la consulta producción diaria-->

				<div class="col-md-12" id="seccion_consulta_produccion" style="display: none;">
											
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
							</div>
			
							<h2 class="panel-title">Consulta de Producción</h2>
						</header>
						<div class="panel-body">															
																										
								<div class="col-sm-5">
									<div class="form-group">
										<label class="control-label">Desde:</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</span>
											<input id="campo_fecha1_consulta_produccion" type="text" data-plugin-datepicker class="form-control" onchange="obtenerCajuelasRegistradas();" >
										</div>
									</div>
								</div>

								<div class="col-sm-5">
									<div class="form-group">
										<label class="control-label">Hasta:</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</span>
											<input id="campo_fecha2_consulta_produccion" type="text" data-plugin-datepicker class="form-control" onchange="obtenerCajuelasRegistradas();" >
										</div>
									</div>
								</div>
								
								<div class="col-sm-2">
									<div class="form-group">
										<label class="control-label"></label>
										<div>
											<button type="button" id="button_registrar_produccion_finca" class="mb-xs mt-xs mr-xs btn btn-success btn-block">Realizar Pago</button>
										</div>
									</div>
								</div>
						</div>														
					</section>						
				</div>

				<div class="col-md-12" id="seccion_lista_dias_consulta_produccion" style="display: none;">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
							</div>
					
							<h2 class="panel-title"></h2>
						</header>
						<div class="panel-body">								
							<div id="table_control_produccion" class="table-editable">									
								<table  id="table_control_produccion_editable" class="table table-bordered table-responsive-md table-striped text-center">
								<thead>
									<tr>
									<th class="text-center">N°</th>
									<th class="text-center">Colaborador</th>
									<th class="text-center">Fecha</th>
									<th class="text-center">Cajuelas</th>
									<th class="text-center">Cuartillos</th>
									<th class="text-center">Acción</th>
									</tr>
								</thead>									  
								</table>
							</div>
						</div>
					</section>				
				</div>

                <!-- FIN CONSULTA PRODUCCIÓN -->

					<!--  sección para llevar a cabo el registro y control de fincas -->

					<!-- INICIO REGISTRO FINCAS -->

					<div class="col-md-12" id="seccion_crear_finca" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>

								<h2 class="panel-title">Registrar Finca</h2>

							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">N° Finca</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-lock"></i></span>
												</span>
												<input readonly="readonly" type="text" id="numero_insert_finca" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Propietario</label>
												<select id="select_propietarios_finca" class="form-control populate">
																																								
												</select>
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Nombre</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-columns"></i></span>
												</span>
												<input type="text" id="nombre_insert_finca" class="form-control">
											</div>		
											
										</div>
										
									</div>
									
								</div>
							</br>
								<div class="row">
									
									<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label">Dirección</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-map-marker"></i></span>
												</span>
												<input type="text" id="direccion_insert_finca" class="form-control">
											</div>		
											
										</div>
									</div>
									
								</div>
							</div>
							<footer class="panel-footer">
								<div class="form-group">
									<label class="col-md-3 control-label"></label>
									<div class="col-md-5">
										<button type="button" id="button_insert_finca" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Registrar</button>
										
									</div>
								</div>
							</footer>
							<button style="display: none;" id="default-success-insert-col"  class="mt-sm mb-sm btn btn-success">Success</button>
							<button style="display: none;" id="default-error-insert-col" class="mt-sm mb-sm btn btn-danger">Error</button>
						</section>
					
				    </div>

					<!-- FIN REGISTRO FINCAS -->

					<!-- INICIO ACTUALIZACIÓN FINCAS -->

					<div class="col-md-12" id="seccion_buscar_finca_act" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
				
								<h2 class="panel-title">Buscar Finca</h2>
							</header>
							<div class="panel-body">
								<form class="form-horizontal form-bordered" method="get">
																				
									<div class="form-group">
										<label class="col-md-3 control-label">Nombre/N° Finca</label>
										<div class="col-md-6">
											<div class="input-group input-search">
												<input type="text" class="form-control"  id="buscar_update_fincas" placeholder="Buscar...">
												<span class="input-group-btn">
													<button class="btn btn-default" id="button_buscar_update_fincas" type="button"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
																							
								</form>
							</div>
						</section>
							
					</div>

					<div class="col-md-12" id="seccion_lista_fincas_act" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								
								</div>
				
								<h2 class="panel-title">Lista Fincas</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table id="table_update_fincas" class="table table-hover mb-none text-center">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Nombre</th>
												<th class="text-center">Dirección</th>
												<th class="text-center">Propietario(a)</th>
												<th class="text-center">Actualizar</th>
											</tr>
										</thead>
										
									</table>
								</div>
							</div>
						</section>
							
					</div>

					<div class="col-md-12" id="panel_actualizar_finca" style="display: none;">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>

								<h2 class="panel-title">Actualizar Finca</h2>

							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">N° Finca</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-lock"></i></span>
												</span>
												<input readonly="readonly" type="text" id="number_update_finca" class="form-control">
											</div>		
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Propietario</label>
												<select id="select_update_propietarios_finca" data-plugin-selectTwo class="form-control populate">
																																								
												</select>
											
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label class="control-label">Nombre Completo</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-columns"></i></span>
												</span>
												<input type="text" id="name_update_finca" class="form-control">
											</div>		
											
										</div>
									</div>
									
								</div>
							</br>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label">Dirección</label>
											
											<div class="input-group input-group-icon">
												<span class="input-group-addon">
													<span class="icon"><i class="fa fa-map-marker"></i></span>
												</span>
												<input type="text" id="direccion_update_finca" class="form-control">
											</div>		
											
										</div>
									</div>
									
								</div>
							</div>
							<footer class="panel-footer">
								<div class="form-group">
										
									<div class="col-md-2">
										<button onclick="seccion_actualizacion_finca(2);buscarFincaActualizar();" type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-chevron-left"></i> Atrás</button>
									</div>
									<div class="col-md-7">
										<button id="button_update_finca" type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Actualizar Finca</button>
									</div>
								</div>
							</footer>
							<button style="display: none;" id="default-success-update-col"  class="mt-sm mb-sm btn btn-success">Success</button>
							<button style="display: none;" id="default-error-update-col" class="mt-sm mb-sm btn btn-danger">Error</button>
						</section>
					
				   </div>

					<!-- FIN ACTUALIZACIÓN FINCAS -->

					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>

			<!-- Vendor -->
			<script src="assets/vendor/jquery/jquery.js"></script>
			<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
			<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
			<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
			<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
			<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
			
			<!-- Specific Page Vendor -->
			<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
			<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
			<script src="assets/vendor/select2/select2.js"></script>
			<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
			<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
			<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
			<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
			<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
			<script src="assets/vendor/fuelux/js/spinner.js"></script>
			<script src="assets/vendor/dropzone/dropzone.js"></script>
			<script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
			<script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
			<script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
			<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
			<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
			<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
			<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
			<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
			<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
			<script src="assets/vendor/codemirror/mode/css/css.js"></script>
			<script src="assets/vendor/summernote/summernote.js"></script>
			<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
			<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>
			<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		    <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
			
			<!-- Theme Base, Components and Settings -->
			<script src="assets/javascripts/theme.js"></script>
			
			<!-- Theme Custom -->
			<script src="assets/javascripts/theme.custom.js"></script>
			
			<!-- Theme Initialization Files -->
			<script src="assets/javascripts/theme.init.js"></script>
			<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
			<script src="assets/javascripts/ui-elements/examples.notifications.js"></script>
			<script src="assets/javascripts/forms/examples.advanced.form.js"></script>
			<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>

			
			<!-- Control de Mostrar y Esconder Secciones -->
			<script src="assets/javascripts/visual_control.js"></script>
			
			<!-- Código de Insertar, Actualizar, Eliminar colaboradores -->
		    <script src="assets/javascripts/forms/colaborador.js"></script>

			<!-- Código de Control de producción -->
			<script src="assets/javascripts/forms/registro_produccion.js"></script>
			<script src="assets/javascripts/forms/api_sms.js"></script> <!-- API envio sms al colaborador q  -->

			<!-- Código de Control de fincas -->
			<script src="assets/javascripts/forms/fincas.js"></script>
			
			<!-- Obtenemos los datos del usuario que realizó el inicio de sesión -->
			<script>
				var listsCredenciales = localStorage.getItem('listsCredenciales');
				var valores = JSON.parse(listsCredenciales);
				
				document.getElementById("span_identificacion_no_mostrar").innerHTML = valores.identification;
				document.getElementById("span_nombre_usuario_mostrar").innerHTML = valores.name;
			    document.getElementById("span_tipo_usuario_mostrar").innerHTML = valores.tipo;
			</script>

		</section>

	
	</body>
</html>