@extends('front.layout.master')

@section('content')
       
<div class="page">
	<div class="banner banner--image">
		<div class="banner__container">
			<div class="banner__content">
				<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
				<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Easy.cl</h1>
				<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Para lograr una identidad visual consistente y coherente en el tiempo, es fundamental ser fiel a los lineamientos establecidos y dar uso correcto a ellos. Descubre aquí los recursos y delimitaciones gráfica con las que contamos.</p>
			</div>
			<div class="banner__image observe" data-observe-animation="fadeInRight">
				<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Easy.cl" title="Easy.cl" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/easy-cl.jpg" /></div>
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
			<div class="breadcrumbs__item breadcrumbs__item--current">Easy.cl</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-lg-3">
				@include('front.our-brand.sidemenu')
			</div>
			<div class="col-xs-12 col-lg-9">
				<div class="content">
					<h3>Logotipo</h3>
					<p>Este logo se utiliza exclusivamente cuando se comunican ofertas de nuestro sitio y solo cuando el que habla es Easy.cl</p>
					<div class="preview logo-preview">
						<div class="preview__header">
							<div class="preview__color-selector">
								<div class="preview__color-selector__label">Background</div>
								<div class="preview__color-selector__items">
									<div class="preview__color-selector__item active" style="background:#e00111" data-sheme="dark" data-background="#E00111" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-cl-logo--default.svg"></div>
								</div>
							</div>
							<!--<div class="preview__variations">
								<div class="form__toggle preview__variations__item" style="width:90px"><label for="area">Área</label><input class="preview__variations__input" type="checkbox" name="area" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-cl-logo--area.svg" />
									<div class="form__toggle__item"></div>
								</div>
								<div class="form__toggle preview__variations__item" style="width:90px"><label for="grid">Grilla</label><input class="preview__variations__input" type="checkbox" name="grid" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-cl-logo--grid.svg" />
									<div class="form__toggle__item"></div>
								</div>
							</div>-->
						</div>
						<div class="preview__body">
							<div class="preview__area" style="background:#e00111">
								<div class="preview__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-cl-logo--default.svg" /></div>
								<div class="preview__description"></div>
							</div>
						</div>
					</div>
					<p>Este logo siempre debe ser usado sobre Fondo Rojo. La palabra “easy” cala blanco y el “.cl” va en amarillo.</p>
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
									<div class="choices__item__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/nuestra-marca/easycl/tamano-3.svg" alt="Tamaño Mínimo" /></div>
								</div>
							</div>
							<div class="choices__item" style="background-color:undefined;display:none" data-tooltip="2 CM">
								<div class="choices__item__content">
									<div class="choices__item__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/nuestra-marca/easycl/tamano-2.svg" alt="Tamaño Mínimo" /></div>
								</div>
							</div>
							<div class="choices__item" style="background-color:undefined;display:none" data-tooltip="1 CM">
								<div class="choices__item__content">
									<div class="choices__item__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/nuestra-marca/easycl/tamano-1.svg" alt="Tamaño Mínimo" /></div>
								</div>
							</div>
						</div>
						<p>Respetar el tamaño mínimo de reducción a 1 cm de diámetro, sin claim.</p>
					</div>
					<div class="content__item content--color-box">
						<h3>Colores Corporativos</h3>
						<p>Para lograr esa identificación marcaria y colaborar con una construcción sólida de nuestra imagen de marca, contamos con dos colores principales: rojo y amarillo.</p>
						<div class="row">
							<div class="col-xs-12 col-md-8">
								<div class="color-box" style="background-color:#e00109;color:#fff" data-tooltip="Color principal: Rojo">
									<div class="color-box__values">
										<div class="color-box__values__item">R224 / G1 / B9</div>
										<div class="color-box__values__item">#E00109</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="color-box" style="background-color:#ffef00;color:#000" data-tooltip="Color secundario: Amarillo">
									<div class="color-box__values">
										<div class="color-box__values__item">R255 / G239 / B0</div>
										<div class="color-box__values__item">#FFEF00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content__item content--color-box">
						<h3>Colores Complementarios</h3>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="color-box" style="background-color:#fe8f1d;color:#fff" data-tooltip="Naranjo">
									<div class="color-box__values">
										<div class="color-box__values__item">R254 / G143 / B29</div>
										<div class="color-box__values__item">#FE8F1D</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="color-box" style="background-color:#7cb929;color:#fff" data-tooltip="Verde">
									<div class="color-box__values">
										<div class="color-box__values__item">R121 / G192 / B0</div>
										<div class="color-box__values__item">#7CB929</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="content__item content--undefined">
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
					</div>-->
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