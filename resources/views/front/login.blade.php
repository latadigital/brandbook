<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Satisfy&display=swap" rel="stylesheet">
		<title>Brand Book Easy | Login</title>
		<link href="{{ asset('front/assets/css/main.6d5b65e701a2eeecb047.css') }}" rel="stylesheet">
	</head>

	<body>
		<div class="access-page">
			<div class="access-page__container">
				<div class="access-page__content">
					<header class="access-page__header"><a class="access-page__header__item access-page__header__item--logo" href="/"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logo-dark.svg" /></a></header>
					<h1 class="h3">Iniciar Sesión</h1>
					<p>Ingresa tus datos de acceso para poder acceder</p>
					<div class="space--6"></div>
					<div class="access-page__msgs" style="display:none">
						<div class="alert alert--danger" style="display:none">
							<div class="alert__main">
								<div class="alert__header">Error</div>
								<div class="alert__content">Los datos ingresados no son válidos, prueba <a href="/registro.html">reintentar</a></div>
							</div>
						</div>
						<div class="space--4"></div>
					</div>


					{{ Form::open(array('route' => 'admin_login_validate', 'class'=>'form', 'method' => 'post')) }}
					<!-- <form class="form" id="login"> -->
						<div class="form__group">
							<input class="form__input" type="email" name="email" id="inputEmailAddress" placeholder="email@email.cl" required="required" value="{{ old('email') }}"/>
							<label class="form__label" for="email">Email</label>
							{!! $errors->first('email', '<div class="error error-block">:message</div>') !!}
						</div>
						<div class="form__group">
							<input class="form__input" type="password" name="password" id="inputChoosePassword" placeholder="****" required="required" />
							<label class="form__label" for="password">Password</label>
							{!! $errors->first('password', '<div class="error error-block">:message</div>') !!}
						</div>
						<div class="text-align-right-xs"><a class="link" href="/recuperar.html">¿Olvidaste tu contraseña?</a>
							<div class="space--3"></div>
						</div>
						<div class="text-align-right-xs"><button class="btn btn--primario">Ingresar</button></div>
					<!-- </form> -->
					{{ Form::close() }}


					<p>¿No estás registrado? <a class="link" href="/registro.html">Registrarse</a></p>
					<div class="space--6"></div>
					<footer class="access-page__footer">
						<p><small>© 2017 | Easy todos los derechos reservados</small></p>
					</footer>
				</div>
				<div class="access-page__banner">
					<div class="access-page__banner__bar">
						<div class="access-page__banner__icons icons icons--white"></div>
					</div>
					<div class="access-page__banner__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/access.jpg" /></div>
					<div class="access-page__banner__btns"><a class="btn btn--primario btn--invertido" href="/">Ir al Sitio</a></div>
				</div>
			</div>
		</div>
		<script defer src="{{ asset('front/assets/js/main.6d5b65e701a2eeecb047.js') }}"></script> 
	</body>

</html>