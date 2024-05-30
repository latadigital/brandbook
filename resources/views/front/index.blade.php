@extends('front.layout.master')

@section('content')
		<section class="section section--Brand">
			<div class="Brand--banner">
        <div class="Brand--gallery">
          <div class="Brand--figure"> <img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/banner-principal--02.png" alt="BrandBook" /></div>
          <div class="Brand--figure"> <img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/banner-principal--03.png" alt="BrandBook" /></div>
          <div class="Brand--figure"> <img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/banner-principal--04.png" alt="BrandBook" /></div>
        </div>
        <div class="c-container">
          <div class="Brand--content">
            <div class="Brand--items">
              <div class="Brand--bg"> <img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/bg--banner--principal--01.svg" alt="" /></div>
              <div class="Brand--legend">
                <h1 class="mask--text">BrandBook</h1>
                <p>Este Brandbook es una herramienta que nos garantiza y ayuda a tener una consistencia en el uso y lenguaje de la marca Easy en todos sus aspectos conceptuales, verbales y visuales.</p><a class="btn btn--primario btn--redondo btn--x-small btn--icono btn--icono-der" href="">Iniciar<i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="Brand--items">
              <div class="Brand--items--figure"> <img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/banner-principal--01.png" alt="BrandBook" /></div>
            </div>
          </div>
        </div>
      </div>
			@if (Auth::user())
				<nav class="nav">
					<div class="nav__container">
						<a class="nav__link" href="{{ route('positioning') }}" data-title="Propuesta de Valor" title="Propuesta de Valor">
								<span>Propuesta de Valor</span>
								<i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('our-brand') }}" data-title="Nuestra Marca" title="Nuestra Marca">
								<span>Nuestra Marca</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('expert')}}" data-title="Mundo Experto" title="Mundo Experto">
								<span>Mundo Experto</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<!--<a class="nav__link" href="{{ route('institutional-marketing') }}" data-title="Marketing Institucional" title="Marketing Institucional">
								<span>Marketing Institucional</span>
								<i class="fa fa-arrow-right nav__link__icon"></i>
						</a>-->
						<a class="nav__link" href="{{ route('graphic-resources') }}" data-title="Recursos Gráficos" title="Recursos Gráficos">
								<span>Recursos Gráficos</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
					</div>
				</nav>
				@else
				<nav class="nav">
					<div class="nav__container">
						<a class="nav__link" href="{{ route('login') }}" data-title="Propuesta de Valor" title="Propuesta de Valor">
								<span>Propuesta de Valor</span>
								<i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('login') }}" data-title="Nuestra Marca" title="Nuestra Marca">
								<span>Nuestra Marca</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('login') }}" data-title="Mundo Experto" title="Mundo Experto">
								<span>Mundo Experto</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('login') }}" data-title="Marketing Institucional" title="Marketing Institucional">
								<span>Marketing Institucional</span>
								<i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
						<a class="nav__link" href="{{ route('login') }}" data-title="Recursos Gráficos" title="Recursos Gráficos">
								<span>Recursos Gráficos</span><i class="fa fa-arrow-right nav__link__icon"></i>
						</a>
					</div>
				</nav>
			@endif
		  </section>
		<section class="section section--info">
			<div class="container">
				<div class="row justify-between-xs">
					<div class="col-xs-12 col-md-5">
						<div class="section__info">
							<h2 class="section__title section__title--left observe" data-observe-animation="fadeInDown"><span>Quiénes Somos</span></h2>
							<div class="space--3"></div>
							<div class="section__icons icons icons--red observe" data-observe-animation="fadeInUp" data-observe-delay="800"></div>
							<p class="section__description observe" data-observe-animation="fadeInRight" data-observe-delay="400" data-observe-duration="500">En Easy somos una gran familia con un rol fundamental en la calidad de vida de las personas, por lo que buscamos brindar permanentemente soluciones, alternativas y productos que permitan la construcción, renovación y personalización de sus hogares. También tenemos responsabilidad con aquellos que no tienen un hogar, por eso trabajamos nuestra estrategia de negocio de manera sostenible y que nos permita aportar de manera concreta a nuestros vecinos, logrando hacer de cualquier espacio, un verdadero hogar.</p>
							@if (Auth::user())
							<a class="btn btn--primario btn--big btn--icono btn--icono-der" href="{{ route('positioning') }}"><span>Descubre más</span><i class="fa fa-chevron-right"></i></a>
							@endif
							<div class="space--6 oculto-md"> </div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="section__image"><img class="image lozad image--rounded image--cover image--block image--width-full observe" alt="Quiénes Somos" title="Quiénes Somos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/quienes-somos.jpg" data-observe-animation="fadeInLeft" data-observe-delay="400" data-observe-duration="500" /></div>
					</div>
				</div>
			</div>
		</section>
		<section class="section section--video-list">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="space--4"></div>
						<div class="section__item" data-item="0">
							<div class="row align-middle-xs">
								<div class="col-xs-12 col-md-6">
									<h2 class="section__title section__title--left"><span>Nuestro Manifiesto</span></h2>
									<div class="section__info observe" data-observe-animation="fadeInUp">
										<div class="space--2"></div>
										<p class="large section__description">¿Sabes cuál es la <span>diferencia entre casa y hogar</span>?</p>
										<div class="space--3"></div><a class="btn btn--primario btn--big btn--icono btn--icono-der" href="{{ route('our-manifest') }}">Ver vídeo<i class="fa fa-chevron-right"> </i></a>
									</div>
									<div class="space--6"></div>
								</div>
								<div class="col-xs-12 col-md-6"><a class="observe" href="{{ route('our-manifest') }}" data-observe-animation="fadeInUp" data-observe-duration="500">
										<div class="section__video"><video src="https://easy--brandbook.s3.us-west-2.amazonaws.com/video/nuestro-manifiesto--trailer.mp4?1656509358105" loop="loop" autoplay="autoplay" muted="muted"> </video>
											<div class="section__video__icon">
												<div class="section__video__icon__item"><i class="fa fa-play"></i></div>
											</div>
										</div>
									</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
