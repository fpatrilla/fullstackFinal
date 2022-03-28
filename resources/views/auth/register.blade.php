<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
            <meta name="author" content="AdminKit">
            <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="shortcut icon" href="<?php echo url('/'); ?>/admin/img/icons/icon-48x48.png" />
            <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

            <title>Sign Up | River Plate</title>

            <link href="<?php echo url('/'); ?>/admin/css/app.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

    </head>
<body style="background-color: rgb(54, 52, 52); color: white;">

            @extends('layouts.app')

            @section('content')
            <main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h1"style= "color: white;">Bienvenidos</h1>
                            <div class="text-center">
                            <a href="{{ url('') }}"><img src="<?php echo url('/'); ?>/img/gallery/logo.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="80" height="80" />
                            </a>
                            </div>

							<p class="lead">
								Cree su usuario.
							</p>
						</div>
                        
                            <div class="card-header" style="background-color:red">{{ __('Register') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row"  style="margin:10px">
                                        <label for="name" class="col-md-4 col-form-label text-md-right" style="background-color:red">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" style="margin:10px">
                                        <label for="email" class="col-md-4 col-form-label text-md-right"  style="background-color:red" >{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" style="margin:10px">
                                        <label for="password" class="col-md-4 col-form-label text-md-right"  style="background-color:red">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" style="margin:10px">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"  style="background-color:red">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0" style="margin-top: 40px;">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                            
                                        </div>
                                    </div>
                                </form>
                                <div style="float:right">
                                 <a href="{{ url('') }}"><button class="btn btn-primary">
                                                Volver
                                                </button></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
    </body>
</html>            
