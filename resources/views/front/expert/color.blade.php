@extends('front.layout.master')

@section('content')

<div class="page">
			<div class="banner banner--image">
				<div class="banner__container">
					<div class="banner__content">
						<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
						<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Color</h1>
						<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Mundo Experto también se construye con el color rojo corporativos de la marca, más el negro.</p>
					</div>
					<div class="banner__image observe" data-observe-animation="fadeInRight">
						<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Color" title="Color" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto--color.jpg" /></div>
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
					<div class="breadcrumbs__item breadcrumbs__item--current">Color</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-3">
						@include('front.expert.sidemenu')  
					</div>
					<div class="col-xs-12 col-lg-9">
						<div class="content">
							<div class="color-box__container">
								<h2>Colores Corporativos</h2>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
											<div class="color-box" style="background-color:#db0812;color:#fff">
												<div class="color-box__values">
													<div class="color-box__values__item">C0 / M100 / Y100 / K5</div>
													<div class="color-box__values__item">R224 / G1 / B9</div>
													<div class="color-box__values__item">#DB0812</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="observe" data-observe-animation="fadeInUp" data-observe-duration="600">
											<div class="color-box" style="background-color:#000;color:#fff">
												<div class="color-box__values">
													<div class="color-box__values__item">C0 / M0 / Y0 / K100</div>
													<div class="color-box__values__item">R0 / G0 / B0</div>
													<div class="color-box__values__item">#000000</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection