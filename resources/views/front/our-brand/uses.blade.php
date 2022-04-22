@extends('front.layout.master')

@section('content')
                        
		<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Usos</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Usos" title="Usos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/nuestra-marca--usos.jpg" /></div>
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
					<div class="breadcrumbs__item breadcrumbs__item--current">Usos</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
						@include('front.our-brand.sidemenu')
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<div class="content__item">
								<h3>Versión Cierre comerciales</h3>
								<p>En formato TV, la marca siempre debe cerrar de la misma manera, junto al claim de campaña y bajada “Tiendas / Online” sobre fondo rojo corporativo.</p>
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><video class="content__video" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/video/cierre-easy.mp4" cover="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/comerciales-01.svg" controls="controls" autoplay="autoplay" muted="muted" loop="loop"></video>
									<p>El imagotipo y textos se posicionan en el centro de la pantalla. Debe respetarse este tamaño, dejando aire alrededor.</p>
								</div>
								<div class="space--3"></div>
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/comerciales-02.svg" alt="El claim se alínea con “Easy” en el borde superior." />
									<p>El claim se alínea con “Easy” en el borde superior.</p>
								</div>
								<div class="space--3"></div>
							</div>
							<div class="content__item">
								<h3>Versión Horizontal</h3>
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500">
									<p>En formatos muy horizontales, la marca Easy puede tomarse la licencia de aplicarse de otra manera en favor de su visibilidad.</p><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/02-01.svg" alt="En formatos muy horizontales, la marca Easy puede tomarse la licencia de aplicarse de otra manera en favor de su visibilidad." />
								</div>
								<div class="space--3"></div>
								<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500">
									<p>Cuando el imagotipo prisme más grande, debe dejarse un margen arriba y abajo, centrando la palabra “easy”. Cencosud desaparece.</p><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/02-02.svg" alt="Cuando el imagotipo prisme más grande, debe dejarse un margen arriba y abajo, centrando la palabra “easy”. Cencosud desaparece." />
								</div>
								<div class="space--3"></div>
							</div>
							<div class="content__item content--color-box">
								<h3>Uso sobre fondos color plano</h3>
								<p>Estas son las versiones de color principales de nuestra marca conviviendo en un entorno cromático propio, de acuerdo al contexto donde se decida ubicarlas y a las particularidades de la pieza de comunicación en la que se está trabajando.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#da0a12">
											<div class="color-box__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/easy-logo--plano.svg" alt="Uso sobre fondos color plano" /></div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#000">
											<div class="color-box__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/easy-logo--plano.svg" alt="Uso sobre fondos color plano" /></div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#2cafb9">
											<div class="color-box__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/easy-logo--white.svg" alt="Uso sobre fondos color plano" /></div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="color-box" style="background-color:#878686">
											<div class="color-box__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/easy-logo--white.svg" alt="Uso sobre fondos color plano" /></div>
										</div>
									</div>
								</div>
							</div>
							<div class="content__item">
								<h3>Uso sobre fondos fotográficos</h3>
								<p>Cuando la marca caiga sobre fondos no planos, es muy importante que el fondo no perturbe el correcto reconocimiento de la marca y atente contra su impacto visual. El contorno blanco de la marca, permite separarla del fondo.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fotografia-01.png" alt="" /></div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fotografia-02.png" alt="" /></div>
										<div class="space--3"></div>
									</div>
								</div>
							</div>
							<div class="content__item">
								<h3>Usos Incorrectos</h3>
								<p>La efectividad de la imagen de la empresa depende del uso correcto de la normativa de aplicación. Es necesario tener en cuenta los usos inapropiados más frecuentes de nuestro imagotipo para poder evitarlos. Siempre la marca se aplicará utilizando su contenedor.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/01.svg" alt="No cambiar la distribución de los elementos" />
											<p>No cambiar la distribución de los elementos</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/02.svg" alt="La marca no podrá ser utilizada sobre fondo blanco sin utilizar la sombra demarcatoria de la misma" />
											<p>La marca no podrá ser utilizada sobre fondo blanco sin utilizar la sombra demarcatoria de la misma</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/03.svg" alt="No usar el imagotipo en ninguna forma inclinada" />
											<p>No usar el imagotipo en ninguna forma inclinada</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/04.svg" alt="No alterar los colores del contenedor" />
											<p>No alterar los colores del contenedor</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/05.svg" alt="No rodear con filete el imagotipo" />
											<p>No rodear con filete el imagotipo</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/06.svg" alt="No alterar los elementos del imagotipo" />
											<p>No alterar los elementos del imagotipo</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/07.svg" alt="No calar los textos de la marca" />
											<p>No calar los textos de la marca</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6 col-lg-4">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/08.svg" alt="No cambiar la proporción de los elementos" />
											<p>No cambiar la proporción de los elementos</p>
										</div>
										<div class="space--3"></div>
									</div>
								</div>
							</div>
							<div class="content__item">
								<h3>Usos Incorrectos sobre fondos</h3>
								<p>Aquí se muestran ejemplos no permitidos de aplicación del imagotipo sobre colores planos ajenos a la marca o imágenes que complican o imposibilitan su visibilidad.</p>
								<div class="row">
									<div class="col-xs-12 col-md-3">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-01.svg" alt="No usar de fondo un rojo diferente al rojo corporativo" />
											<p>No usar de fondo un rojo diferente al rojo corporativo</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-02.svg" alt="No usar de fondo colores muy similares al rojo y ajenos a nuestra paleta" />
											<p>No usar de fondo colores muy similares al rojo y ajenos a nuestra paleta</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-03.svg" alt="No usar de fondo colores muy similares al rojo y ajenos a nuestra paleta" />
											<p>No usar de fondo colores muy similares al rojo y ajenos a nuestra paleta</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="observe text-align-center-xs" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-04.svg" alt="No usar de fondo colores principales de la competencia." />
											<p>No usar de fondo colores principales de la competencia.</p>
										</div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-05.png" alt="" /></div>
										<div class="space--3"></div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="500"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/usos/nuestra-marca/fondos-06.png" alt="" /></div>
										<div class="space--3"></div>
									</div>
								</div>
								<p>No ubicar la marca sobre imágenes con mucha información. La idea es elegir los sectores más limpios dentro de una imagen y así asegurar el correcto reconocimiento de la marca.</p>
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