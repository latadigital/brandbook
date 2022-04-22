@extends('front.layout.master')

@section('content')
<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Color</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Sobre fondo rojo, la palabra “easy” cala blanco y el “.cl” va en amarillo.</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Color" title="Color" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/easy-cl--color.jpg" /></div>
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
					<div class="breadcrumbs__item breadcrumbs__item--current">Color</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
                        @include('front.easycl.sidemenu') 
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<div class="color-box__container">
								<h2>Colores Corporativos</h2>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#e00109;color:#fff">
											<div class="color-box__values">
												<div class="color-box__values__item">R224 / G1 / B9</div>
												<div class="color-box__values__item">#E00109</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#ffef00;color:#000">
											<div class="color-box__values">
												<div class="color-box__values__item">R255 / G239 / B0</div>
												<div class="color-box__values__item">#FFEF00</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="color-box__container">
								<h2>Colores Complementarios</h2>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#fe8f1d;color:#fff">
											<div class="color-box__values">
												<div class="color-box__values__item">R254 / G143 / B29</div>
												<div class="color-box__values__item">#FE8F1D</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#7cb929;color:#fff">
											<div class="color-box__values">
												<div class="color-box__values__item">R121 / G192 / B0</div>
												<div class="color-box__values__item">#7CB929</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
  @endsection