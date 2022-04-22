@extends('front.layout.master')

@section('content')
    <section class="section section--ugly-banner">
        <div class="ugly--banner">
            <div class="ugly__bg"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/inicio.jpg" alt="Brandbook web Easy" /></div>
            <div class="ugly__particles" id="particles-js"></div>
            <div class="ugly__container">
                <div class="ugly__info"><img class="ugly__logo" src="{{ asset('front/assets/img/logo-home.svg') }}" alt="" />
                    <p class="ugly__description">Este Brandbook es una herramienta que nos garantiza y ayuda a tener una consistencia en el uso y lenguaje de la marca Easy en todos sus aspectos conceptuales, verbales y visuales.</p><a class="btn btn--primario btn--redondo btn--big btn--icono btn--icono-der" href="/posicionamiento.html">Iniciar<i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="ugly__icons">
                <img src="{{ asset('front/assets/img/icons/inicio/banner-1.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-2.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-3.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-4.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-5.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-6.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-7.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-8.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-9.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-10.svg') }}"/>
                <img src="{{ asset('front/assets/img/icons/inicio/banner-11.svg') }}"/>
            </div>
        </div>
    </section>
    <section class="section section--info">
        <div class="container">
            <div class="row justify-between-xs">
                <div class="col-xs-12 col-md-4">
                    <div class="section__info">
                        <h2 class="section__title section__title--left observe" data-observe-animation="fadeInDown"><span>Quiénes Somos</span></h2>
                        <div class="space--3"></div>
                        <div class="section__icons icons icons--red observe" data-observe-animation="fadeInUp" data-observe-delay="800"></div>
                        <p class="section__description observe" data-observe-animation="fadeInRight" data-observe-delay="400" data-observe-duration="500">En Easy somos una gran familia con un rol fundamental; mejorar la calidad de vida de las personas, por eso nuestro negocio está en aportar soluciones y productos que permitan la construcción, personalización y por sobre todo, la renovación de los espacios dentro de cada uno de los hogares de Chile.</p><a class="btn btn--primario btn--big btn--icono btn--icono-der" href="/quienes-somos.html">Ver más<i class="fa fa-chevron-right"></i></a>
                        <div class="space--6 oculto-md"> </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="section__image"><img class="image lozad image--rounded image--cover image--block image--width-full observe" alt="Quiénes Somos" title="Quiénes Somos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/inicio/quienes-somos.jpg" data-observe-animation="fadeInLeft" data-observe-delay="400" data-observe-duration="500" /></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--video-list">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="section__item" data-item="0">
                        <h2 class="section__title section__title--left"><span>Nuestro Manifiesto</span></h2><a class="observe" href="/video/nuestro-manifiesto.html" data-observe-animation="fadeInUp" data-observe-duration="500">
                            <div class="section__video"><video src="https://easy--brandbook.s3.us-west-2.amazonaws.com/video/nuestro-manifiesto--trailer.mp4?1650572841568" loop="loop" autoplay="autoplay" muted="muted"> </video>
                                <div class="section__video__icon">
                                    <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                </div>
                            </div>
                        </a>
                        <div class="section__info observe" data-observe-animation="fadeInUp">
                            <div class="space--3"></div>
                            <p class="large section__description">¿Sabes cuál es la <span>diferencia entre casa y hogar</span>?</p>
                            <div class="space--6"></div><a class="btn btn--primario btn--big btn--icono btn--icono-der" href="/video/nuestro-manifiesto.html">Ver vídeo<i class="fa fa-chevron-right"> </i></a>
                        </div>
                        <div class="space--6"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="section__item" data-item="1">
                        <h2 class="section__title section__title--left"><span>Nuestro Proposito</span></h2><a class="observe" href="/video/proposito.html" data-observe-animation="fadeInUp" data-observe-duration="500">
                            <div class="section__video"><video src="https://easy--brandbook.s3.us-west-2.amazonaws.com/video/proposito--trailer.mp4?1650572841568" loop="loop" autoplay="autoplay" muted="muted"> </video>
                                <div class="section__video__icon">
                                    <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                </div>
                            </div>
                        </a>
                        <div class="section__info observe" data-observe-animation="fadeInUp">
                            <div class="space--3"></div>
                            <p class="large section__description">"En Easy ayudamos a las personas a <span>construir el hogar de sus sueños</span>"</p>
                            <div class="space--6"></div><a class="btn btn--primario btn--big btn--icono btn--icono-der" href="/video/proposito.html">Ver vídeo<i class="fa fa-chevron-right"> </i></a>
                        </div>
                        <div class="space--6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
