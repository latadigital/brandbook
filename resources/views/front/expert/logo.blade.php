@extends('front.layout.master')

@section('content')
    <div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Logotipo</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Este logo se utiliza exclusivamente en la comunicación orientada al club de beneficios, dirigido a clientes profesionales.</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Logotipo" title="Logotipo" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto--logotipo.jpg" /></div>
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
					<div class="breadcrumbs__item breadcrumbs__item--current">Logotipo</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
						 @include('front.expert.sidemenu')  
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<div class="preview logo-preview">
								<div class="preview__header">
									<div class="preview__color-selector">
										<div class="preview__color-selector__label">Background</div>
										<div class="preview__color-selector__items">
											<div class="preview__color-selector__item active" style="background:#fff" data-sheme="light" data-background="#FFFFFF" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--default.svg"></div>
											<div class="preview__color-selector__item" style="background:#000" data-sheme="dark" data-background="#000000" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--light.svg"></div>
											<div class="preview__color-selector__item" style="background:#e00111" data-sheme="dark" data-background="#E00111" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--colors.svg"></div>
											<div class="preview__color-selector__item" style="background:#f6f6f6" data-sheme="light" data-background="#F6F6F6" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--default.svg"></div>
											<div class="preview__color-selector__item" style="background:https://easy--brandbook.s3.us-west-2.amazonaws.com/img/preview/mundo-experto--01--thumb.jpg" data-sheme="light" data-background="url(https://easy--brandbook.s3.us-west-2.amazonaws.com/img/preview/mundo-experto--01.jpg)" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--light.svg"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/preview/mundo-experto--01--thumb.jpg" /></div>
										</div>
									</div>
									{{-- <div class="preview__variations">
										<div class="form__toggle preview__variations__item" style="width:90px"><label for="area">Área</label><input class="preview__variations__input" type="checkbox" name="area" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--area.svg" />
											<div class="form__toggle__item"></div>
										</div>
										<div class="form__toggle preview__variations__item" style="width:90px"><label for="grid">Grilla</label><input class="preview__variations__input" type="checkbox" name="grid" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--grid.svg" />
											<div class="form__toggle__item"></div>
										</div>
									</div> --}}
								</div>
								<div class="preview__body">
									<div class="preview__area" style="background:#fff">
										<div class="preview__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/mundo-experto-logo--default.svg" /></div>
										<div class="preview__description"></div>
									</div>
								</div>
							</div>
							<p>Club de beneficios de Easy, creado especialmente para nuestros clientes y todas las personas que se desenvuelvan en el mundo de la construcción.</p>
							
							<div class="content__item content--choices">
								<h3>Variaciones Permitidas</h3>
								<div class="row">
									<div class="col-xs-12 col-md-4">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/uses--01.svg') }}" alt="" /></div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/uses--02.svg') }}" alt="" /></div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/uses--03.svg') }}" alt="" /></div>
										<div class="space--3"></div>
									</div>
								</div>
							</div>
							<div class="content__item content--choices">
								<h3>Tamaño Mínimo</h3>
								<p>El tamaño mínimo de aplicación es una medida de seguridad que se debe tomar para garantizar una correcta visualización de nuestra marca.</p>
								<div class="choices">
									<div class="choices__options">
										<div class="choices__options__item choices__options__item--active" style="" title="3 CM">3 CM</div>
										<div class="choices__options__item" style="" title="2 CM">2 CM</div>
										<div class="choices__options__item" style="" title="1 CM">1 CM</div>
									</div>
									<div class="choices__item" style="background-color:undefined" data-tooltip="3 CM">
										<div class="choices__item__content">
											<div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/tamano-3.svg') }} " alt="Tamaño Mínimo" /></div>
										</div>
									</div>
									<div class="choices__item" style="background-color:undefined;display:none" data-tooltip="2 CM">
										<div class="choices__item__content">
											<div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/tamano-2.svg') }} " alt="Tamaño Mínimo" /></div>
										</div>
									</div>
									<div class="choices__item" style="background-color:undefined;display:none" data-tooltip="1 CM">
										<div class="choices__item__content">
											<div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/mundo-experto/logotipo/tamano-1.svg') }} " alt="Tamaño Mínimo" /></div>
										</div>
									</div>
								</div>
							</div>


						</div>
						<div class="content">
							<h3>Usos Incorrectos</h3>
							<p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p>
							<div class="row">
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/01.svg" alt="No cambiar la distribución de los elementos" />
										<p>No cambiar la distribución de los elementos</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/02.svg" alt="No modificar los colores del logo" />
										<p>No modificar los colores del logo</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/03.svg" alt="No usar el logo en ninguna forma inclinada" />
										<p>No usar el logo en ninguna forma inclinada</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/04.svg" alt="No cambiar la proporción de los elementos" />
										<p>No cambiar la proporción de los elementos</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/05.svg" alt="No calar los textos de la marca" />
										<p>No calar los textos de la marca</p>
									</div>
									<div class="space--3"></div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/mundo-experto/06.svg" alt="No aplicar el logo sobre colores planos ajenos a la marca" />
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
								<h3 class="download-cta__title">Descarga de Recursos</h3><a class="download-cta__btn btn btn--primario" href="{{ route('graphic-resources') }}">Ir a las Descargas</a>
							</div>
							<div class="download-cta__icons download-cta__icons--2 icons icons--gray"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection