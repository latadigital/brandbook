@extends('front.layout.master')

@section('content')

<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Imagen</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Las imágenes deben reflejar ambiente de trabajo en el rubro de la construcción, momentos capturados, espacios profesionales, reales y espontáneos. La cromática debe ser capaz de connotar esa calidez y seriedad. 						</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Imagen" title="Imagen" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto--imagen.jpg" /></div>
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
					<div class="breadcrumbs__item breadcrumbs__item--current">Imagen</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
						@include('front.expert.sidemenu')  
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<h3>Fotografías Institucionales</h3>
							<p>Disponible la serie completa para su descarga en descarga de recursos.</p>
							<div class="row">
								<div class="col-xs-12 col-md-4 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/image--corp--01.png') }}" alt="No cambiar la distribución de los elementos" />
									</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/image--corp--02.png') }}" alt="No cambiar la distribución de los elementos" />
									</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/image--corp--03.png') }}" alt="No cambiar la distribución de los elementos" />
									</div>
								</div>
							</div>
						</div>
						<div class="content">
							{{-- <p>Dentro del concepto del hogar, la idea es mostrar siempre productos o elementos representativos de la marca Easy.</p> --}}
							<h3>Imagen</h3>
							<div class="gallery">
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/01.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 1 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/01.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/01.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/01.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/02.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 2 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/02.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/02.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/02.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/03.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 3 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/03.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/03.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/03.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/04.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 4 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/04.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/04.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/04.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/05.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 5 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/05.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/05.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/05.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/06.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 6 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/06.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/06.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/06.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/07.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 7 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/07.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/07.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/07.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
								<a class="gallery__item glightbox" href="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/08.jpg" data-gallery="gallery-default" data-glightbox="type: image" title="Imágen 8 de Imagen xxxxx">
									<img class="image lozad image--cover image--block observe" alt="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/08.jpg" title="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/08.jpg" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/gallery/mundo-experto/08.jpg" data-observe-animation="fadeInRight" data-observe-duration="600" />
								</a>
							</div>
						</div>
						<div class="content">
							<h3>Fondos Principales</h3>
							{{-- <p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p> --}}
							<div class="row">
								<div class="col-md-4">
									<div class="col-12">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/Bg--01.svg') }}" alt="" class="img-responsive">
									</div>
									<div class="col-12">
										<img src="{{ asset('/front/assets/img/pages/mundo-experto/image/Bg%E2%80%9402.svg') }}" alt="" class="img-responsive">
									</div>
									<div class="col-12">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/Bg--03.svg') }}" alt="" class="img-responsive">
									</div>
								</div>
								<div class="col-md-4">
									<div class="col-12">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/Bg--04.svg') }}" alt="" class="img-responsive">
									</div>
								</div>
								<div class="col-md-4">
									<div class="col-12">
										<img src="{{ asset('front/assets/img/pages/mundo-experto/image/Bg--05.svg') }}" alt="" class="img-responsive">
									</div>
								</div>
							</div>
						</div>
						<div class="content">
							<h3>Fondos Complementarios</h3>
							{{-- <p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p> --}}
							<div class="row">
								<div class="col-12">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/image/bg--big--01.png') }}" alt="" class="img-responsive">
								</div>
								<div class="col-12">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/image/bg--big--02.png') }}" alt="" class="img-responsive">
								</div>
								<div class="col-12">
									<img src="{{ asset('front/assets/img/pages/mundo-experto/image/bg--big--03.png') }}" alt="" class="img-responsive">
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