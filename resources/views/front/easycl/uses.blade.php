@extends('front.layout.master')

@section('content')
    <div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Usos</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Este logo se utiliza exclusivamente cuando se comunican ofertas de nuestro sitio y solo cuando el que habla es Easy.cl</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Usos" title="Usos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/easy-cl--color.jpg" /></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
					<div class="breadcrumbs__item breadcrumbs__item--separator">
						<div class="fa fa-chevron-right"> </div>
					</div><a class="breadcrumbs__item breadcrumbs__item--link" href="/easy-cl.html"><span>Easy.cl</span></a>
					<div class="breadcrumbs__item breadcrumbs__item--separator">
						<div class="fa fa-chevron-right"> </div>
					</div>
					<div class="breadcrumbs__item breadcrumbs__item--current">Usos</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
                         @include('front.easycl.sidemenu') 
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<h3>Usos Incorrectos</h3>
							<p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p>
							<div class="row">
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/01.svg" alt="No cambiar la distribución de los elementos" />
										<p>No cambiar la distribución de los elementos</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/02.svg" alt="No modificar los colores del logo" />
										<p>No modificar los colores del logo</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/03.svg" alt="No usar el logo en ninguna forma inclinada" />
										<p>No usar el logo en ninguna forma inclinada</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/04.svg" alt="No cambiar la proporción de los elementos" />
										<p>No cambiar la proporción de los elementos</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/05.svg" alt="No calar los textos de la marca" />
										<p>No calar los textos de la marca</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/easy-cl/06.svg" alt="No aplicar el logo sobre colores planos ajenos a la marca" />
										<p>No aplicar el logo sobre colores planos ajenos a la marca</p>
									</div>
									<div class="space--3"></div>
								</div>
							</div>
							<div class="space--6"></div>
						</div>
						<div class="download-cta observe" data-observe-animation="fadeInUp" data-observe-duration="500">
							<div class="download-cta__icons download-cta__icons--1 icons icons--gray"></div>
							<div class="download-cta__content">
								<h3 class="download-cta__title">Descarga de Recursos</h3><a class="download-cta__btn btn btn--primario" href="/recursos-graficos.html">Ir a las Descargas</a>
							</div>
							<div class="download-cta__icons download-cta__icons--2 icons icons--gray"></div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection