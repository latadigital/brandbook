@extends('front.layout.master')

@section('content')

	<div class="page">
		<div class="banner banner--image">
			<div class="banner__container">
				<div class="banner__content">
					<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
					<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Categorías</h1>
					<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Para lograr una identidad visual consistente en el tiempo, es fundamental ser fiel a lineamientos establecidos y dar uso correcto a ellos.</p>
				</div>
				<div class="banner__image observe" data-observe-animation="fadeInRight">
					<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Usos" title="Usos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto--usos.jpg" /></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
				<div class="breadcrumbs__item breadcrumbs__item--separator">
					<div class="fa fa-chevron-right"> </div>
				</div><a class="breadcrumbs__item breadcrumbs__item--link" href="/mundo-experto.html"><span>Mundo Experto</span></a>
				<div class="breadcrumbs__item breadcrumbs__item--separator">
					<div class="fa fa-chevron-right"> </div>
				</div>
				<div class="breadcrumbs__item breadcrumbs__item--current">Usos</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-3">
					@include('front.expert.sidemenu')  
				</div>
				<div class="col-xs-12 col-lg-9">
					<div class="content">
						<h3>Categorías</h3>
						{{-- <p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p> --}}
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/usos/mundo-experto/category--01.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/usos/mundo-experto/category--02.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/usos/mundo-experto/category--03.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/category/category--simple--01.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/category/category--simple--02.svg') }}" alt="" class="img-fluid">
								</div>	
							</div>	
							<div class="col-md-4">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/category/category--simple--03.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
					</div>

					
					<div class="content">
						<h3>Iconografía</h3>
						{{-- <p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p> --}}
						<div class="col-12">
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--01.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--02.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--03.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--04.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--05.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--06.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--07.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--08.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--09.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--10.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--11.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--12.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--13.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-xs-6 col-md-2">
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/icon/ico--mundoexperto--14.svg') }}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="download-cta observe" data-observe-animation="fadeInUp" data-observe-duration="500">
                        <div class="download-cta__icons download-cta__icons--1 icons icons--gray"></div>
                        <div class="download-cta__content">
                            <h3 class="download-cta__title">Descarga de Recursos</h3><a class="download-cta__btn btn btn--primario" href="{{ route('graphic-resources') }}">Ir a las Descargas</a>
                        </div>
                        <div class="download-cta__icons download-cta__icons--2 icons icons--gray"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>

@endsection