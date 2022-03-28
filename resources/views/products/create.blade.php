<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="<?php echo url('/'); ?>/admin/img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>River Plate Amin</title>

	<link href="<?php echo url('/'); ?>/admin/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="<?php echo url('/'); ?>/admin/css/custom.css" rel="stylesheet">

</head>

<body>
@extends('layouts.app')
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand">
          			<span class="align-middle">Adminstracion</span>
					  <img class="me-3 d-inline-block" src="<?php echo url('/'); ?>/admin/img/logo.jpg" alt=""  style="border-radius: 50px; margin-left: 5%;"/>  
    		    </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
                    {{ __('Dashboard') }}	
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link"<a href="{{ url('home') }}">
              				<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Bienvenido  {{ Auth::user()->name }}</span>
            			</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{ url('products/') }}">
              				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Socios</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
             				 <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Consultas Web</span>
            			</a>
					</li>

					<li class="sidebar-item">
						
                            
                    <a class="sidebar-link"  data-feather="user-plus"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                             <span class="align-middle">{{ __('Logout') }}</span>
                            
							 
           				</a>
					</li>
				</ul>
			</div>			
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
         			 <i class="hamburger align-self-center"></i>
     		   </a>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">
				<li class="nav-item dropdown">
					
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											
											
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											
											
										</div>
									</a>
									
									
								</div>
								
							</div>
						</li>
						El mas Grande -  {{ __('You are logged in!') }}
					</ul>
				</div>
			</nav>

			<main class="content">
				<div>
                @extends('products.layout')
  
                            @section('content')
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Agregar Nuevo Socio</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Atras</a>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <strong>Nombre</strong>
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <strong>Actividad</strong>
                                            <input type="text" name="actividad" class="form-control" placeholder="actividad">
                                        </div>
                                    </div>  
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Comentarios</strong>
                                        <textarea class="form-control" style="height:150px" name="detail" placeholder="comentarios"></textarea>
                                    </div>
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Crear</button>
                                </div>    
                        </form>            
	    			</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="{{ url('') }}" >Home</a>
								</li>
                                <li class="list-inline-item">
									<a class="text-muted" href="{{ route('products.create') }}">Crear Socio</a>
								</li>
								<li class="list-inline-item">
								                                                           
                                        <a  class="text-muted" data-feather="user-plus"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }} 

                                         </a>
                          
                           
                                       </a>
								</li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>



	
	

</body>

</html>






