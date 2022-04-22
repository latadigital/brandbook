@extends('front.layout.master')

@section('content')

<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Color</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Para lograr una identidad visual consistente en el tiempo, es fundamental ser fiel a lineamientos establecidos y dar uso correcto a ellos.</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Color" title="Color" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/nuestra-marca--color.jpg" /></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
					<div class="breadcrumbs__item breadcrumbs__item--separator">
						<div class="fa fa-chevron-right"> </div>
					</div><a class="breadcrumbs__item breadcrumbs__item--link" href="/nuestra-marca.html"><span>Nuestra Marca</span></a>
					<div class="breadcrumbs__item breadcrumbs__item--separator">
						<div class="fa fa-chevron-right"> </div>
					</div>
					<div class="breadcrumbs__item breadcrumbs__item--current">Color</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
                        @include('front.our-brand.sidemenu')
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<div class="content__item content--color-box">
								<h3>Colores Corporativos</h3>
								<p>El color es uno de los elementos principales de nuestra identidad visual. Para lograr esa identificación y colaborar con una construcción sólida de nuestra imagen de marca, contamos con dos colores principales: Rojo y Amarillo.</p>
								<div class="row">
									<div class="col-xs-12 col-md-8">
										<div class="color-box" style="background-color:#e00109;color:#fff" data-tooltip="Color principal: Rojo">
											<div class="color-box__values">
												<div class="color-box__values__item">C0 / M100 / Y100 / K5</div>
												<div class="color-box__values__item">R224 / G1 / B9</div>
												<div class="color-box__values__item">#E00109</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="color-box" style="background-color:#ffef00;color:#000" data-tooltip="Color secundario: Amarillo">
											<div class="color-box__values">
												<div class="color-box__values__item">C0 / M0 / Y100 / K0</div>
												<div class="color-box__values__item">R255 / G239 / B0</div>
												<div class="color-box__values__item">#FFEF00</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content__item content--choices">
								<h3>Versión Monotono</h3>
								<p>Nuestra marca cuenta también con versiones monotono para ser utilizada en algunas aplicaciones especiales o para cuando existan limitaciones por las características de un sistema de impresión.</p>
								<div class="choices">
									<div class="choices__options">
										<div class="choices__options__item choices__options__item--active" style="background-color:#000" title="Negro 100%"></div>
										<div class="choices__options__item" style="background-color:#676767" title="Negro 60%"></div>
									</div>
									<div class="choices__item" style="background-color:#000" data-tooltip="Negro 100%">
										<div class="choices__item__content">
											<div class="choices__item__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--white.svg" alt="Versión Monotono" /></div>
										</div>
									</div>
									<div class="choices__item" style="background-color:#676767;display:none" data-tooltip="Negro 60%">
										<div class="choices__item__content">
											<div class="choices__item__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--white.svg" alt="Versión Monotono" /></div>
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
			</div>
		</div>

   
@endsection