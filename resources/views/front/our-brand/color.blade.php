@extends('front.layout.master')

@section('content')

<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Color</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">El color es uno de los elementos principales de nuestra identidad visual y recordación marcaria por lo que hacer un uso responsable de los mismos, es esencial.</p>
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
								<p>Para lograr esa identificación marcaria y colaborar con una construcción sólida de nuestra imagen de marca, contamos con dos colores principales: rojo y amarillo.</p>
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
												<div class="color-box__values__item">R255 / G237 / B0</div>
												<div class="color-box__values__item">#FFEF00</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							

							<!--<style>
								.c--box--color{
									display: block;
									margin-bottom: 20px;
								}

								.box--color{
									display: block;
								}
								.box--color .content--text{
									display: flex;
									padding: 10px;
									align-content: center;
									justify-content: center;
									flex-wrap: wrap;
								}

								.box--color .content--text .box--title{
									display: block;
									font-size: 12px;
									text-align: center;
									width: 100%;
								}
							</style>-->
							<!--<div class="content__item content--color-box">
								<h3>Colores Digitales </h3>
								<p>Para lograr esa identificación marcaria y colaborar con una construcción sólida de nuestra imagen de marca, contamos con dos colores principales: rojo y amarillo.</p>
								<div class="row">
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #FFE6E6; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #FC9999; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #F14D4D; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #E00109; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #CC1515; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #AF1212; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #990707; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #670000; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #4E0808; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #FFFEE7; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #FEFCB4; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #FEF837; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #E4DD0C; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #CAC40A; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #BEB80A; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #989308; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #726E06; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #595605; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #E8F5FC; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #BAE0F7; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #75C1F0; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #47ACEB; color: #000;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #1998E5; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #1479B8; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #0F5B8A; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #0A3D5C; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #072A40; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #E8FCF3; color: #000;">
												<div class="content--text">
													<span class="box--title">#E8FCF3</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #BAF7DC; color: #000;">
												<div class="content--text">
													<span class="box--title">#BAF7DC</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #75F0BA; color: #000;">
												<div class="content--text">
													<span class="box--title">#75F0BA</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #30e897; color: #000;">
												<div class="content--text">
													<span class="box--title">#30e897</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #14B870; color: #fff;">
												<div class="content--text">
													<span class="box--title">#14B870</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #0F8551; color: #fff;">
												<div class="content--text">
													<span class="box--title">#0F8551</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #0B603B; color: #fff;">
												<div class="content--text">
													<span class="box--title">#0B603B</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #073C24; color: #fff;">
												<div class="content--text">
													<span class="box--title">#073C24</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #042516; color: #fff;">
												<div class="content--text">
													<span class="box--title">#042516</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #fdeee9; color: #000;">
												<div class="content--text">
													<span class="box--title">#fdeee9</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #f7ccba; color: #000;">
												<div class="content--text">
													<span class="box--title">#f7ccba</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #F19A70; color: #000;">
												<div class="content--text">
													<span class="box--title">#F19A70</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #eb7847; color: #000;">
												<div class="content--text">
													<span class="box--title">#eb7847</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #e55818; color: #fff;">
												<div class="content--text">
													<span class="box--title">#e55818</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #c64b16; color: #fff;">
												<div class="content--text">
													<span class="box--title">#c64b16</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #973910; color: #fff;">
												<div class="content--text">
													<span class="box--title">#973910</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #6a280c; color: #fff;">
												<div class="content--text">
													<span class="box--title">#6a280c</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #401807; color: #fff;">
												<div class="content--text">
													<span class="box--title">#401807</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4">
										<div class="c--box--color">
											<div class="box--color" data-tooltip="Verde" style="background: #F1F3F4; color: #000;">
												<div class="content--text">
													<span class="box--title">#F1F3F4</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #E1E6EA; color: #000;">
												<div class="content--text">
													<span class="box--title">#E1E6EA</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #B4C2CB; color: #000;">
												<div class="content--text">
													<span class="box--title">#B4C2CB</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #8B9CA7; color: #000;">
												<div class="content--text">
													<span class="box--title">#8B9CA7</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #6E8391; color: #fff;">
												<div class="content--text">
													<span class="box--title">#6E8391</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #5C6E7A; color: #fff;">
												<div class="content--text">
													<span class="box--title">#485760</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #485760; color: #fff;">
												<div class="content--text">
													<span class="box--title">#FFE6E6</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #363F45; color: #fff;">
												<div class="content--text">
													<span class="box--title">#363F45</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
											<div class="box--color" data-tooltip="Verde" style="background: #000000; color: #fff;">
												<div class="content--text">
													<span class="box--title">#000000</span>
													<span class="box--title">RGB(255,230,230)</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 offset-md-3 box--color" style="background: #9EA2A4; color: #000;">
										<div class="content--text">
											<span class="box--title">Nombre del color</span>
											<span class="box--title">#000000</span>
											<span class="box--title">RGB(255,230,230)</span>
										</div>
									</div>
									<div class="col-md-3 offset-md-3 box--color" style="background: #7B8084; color: #000;">
										<div class="content--text">
											<span class="box--title">Nombre del color</span>
											<span class="box--title">#000000</span>
											<span class="box--title">RGB(255,230,230)</span>
										</div>
									</div>
									<div class="col-md-3 offset-md-3 box--color" style="background: #596065; color: #fff;">
										<div class="content--text">
											<span class="box--title">Nombre del color</span>
											<span class="box--title">#000000</span>
											<span class="box--title">RGB(255,230,230)</span>
										</div>
									</div>
									<div class="col-md-3 offset-md-3 box--color" style="background: #363F45; color: #fff;">
										<div class="content--text">
											<span class="box--title">Nombre del color</span>
											<span class="box--title">#000000</span>
											<span class="box--title">RGB(255,230,230)</span>
										</div>
									</div>
								</div>
								  
							</div>-->
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


						<style>
							.col--custom{
								width: 20%;

							}
							.color--circle{
								width: 130px;
								height: 130px;
								border-radius: 50%;
								margin: 20px auto;
							}

							.content--text{
									display: flex;
									padding: 10px;
									align-content: center;
									justify-content: center;
									flex-wrap: wrap;
							}

							.content--text .box--title{
								display: block;
								font-size: 12px;
								text-align: center;
								width: 100%;
							}

							@media screen and (max-width: 600px) {
								.col--custom{
									width: 50%;
								}
							}
						</style>
						<div class="content">
							<div class="content__item content--color-box">
								<h3>Restringidos </h3>
								<p>Para lograr esa identificación marcaria y colaborar con una construcción sólida de nuestra imagen de marca, contamos con dos colores principales: rojo y amarillo.</p>
								<div class="row d-flex flex-wrap">
									<div class="col--custom">
										<div class="color--circle" style="background-color:#a9d72b; color:#fff" data-tooltip="Verde"></div>
										<div class="content--text">
											<span class="box--title">#a9d72b</span>
											<span class="box--title">R169 / G215 / B43</span>
										</div>
									</div>
									<div class="col--custom">
										<div class="color--circle" style="background-color:#FF7002; color:#fff" data-tooltip="Naranjo"></div>
										<div class="content--text">
											<span class="box--title">#ff7102</span>
											<span class="box--title">R255 / G215 / B2</span>
										</div>
									</div>
									<div class="col--custom">
										<div class="color--circle" style="background-color:#061e42; color:#fff" data-tooltip="Azul"></div>
										<div class="content--text">
											<span class="box--title">#061e42</span>
											<span class="box--title">R6 / G30 / B66</span>
										</div>
									</div>
									<div class="col--custom">
										<div class="color--circle" style="background-color:#0056a4; color:#fff" data-tooltip="Azul"></div>
										<div class="content--text">
											<span class="box--title">#0056a4</span>
											<span class="box--title">R0 / G86 / B164</span>
										</div>
									</div>
									<div class="col--custom">
										<div class="color--circle" style="background-color:#0071ce; color:#fff" data-tooltip="Azul"></div>
										<div class="content--text">
											<span class="box--title">#0071ce</span>
											<span class="box--title">R0 / G86 / B164</span>
										</div>
									</div>
									{{-- <div class="col-xs-12 col-md-4">
										<div class="color-box" style="background-color:#a9d72b;color:#fff" data-tooltip="Verde">
											<div class="color-box__values">
												<div class="color-box__values__item">R169 / G215 / B43</div>
												<div class="color-box__values__item">#a9d72b</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-2">
										<div class="color-box" style="background-color:#ff7102;color:#000" data-tooltip="Color restringido: Naranjo">
											<div class="color-box__values">
												<div class="color-box__values__item">R255 / G113 / B2</div>
												<div class="color-box__values__item">#ff7102</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-2">
										<div class="color-box" style="background-color:#061e42;color:#fff" data-tooltip="Color restringido: Azul">
											<div class="color-box__values">
												<div class="color-box__values__item">R6 / G30 / B66</div>
												<div class="color-box__values__item">#061e42</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-2">
										<div class="color-box" style="background-color:#0056a4;color:#fff" data-tooltip="Color restringido: Azul">
											<div class="color-box__values">
												<div class="color-box__values__item">R0 / G86 / B164</div>
												<div class="color-box__values__item">#0056a4</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-2">
										<div class="color-box" style="background-color:#0071ce;color:#fff" data-tooltip="Color restringido: Azul">
											<div class="color-box__values">
												<div class="color-box__values__item">R0 / G86 / B164</div>
												<div class="color-box__values__item">#0071ce</div>
											</div>
										</div>
									</div> --}}
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