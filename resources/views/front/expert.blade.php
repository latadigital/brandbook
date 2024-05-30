@extends('front.layout.master')

@section('content')

    <div class="page">
        <div class="banner banner--image">
            <div class="banner__container">
                <div class="banner__content">
                    <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                    <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Mundo Experto</h1>
                    <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Club de beneficios de Easy, creado especialmente para nuestros clientes y todas las personas que se desenvuelvan en el mundo de la construcción.</p>
                </div>
                <div class="banner__image observe" data-observe-animation="fadeInRight">
                    <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Mundo Experto" title="Mundo Experto" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto.jpg" /></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
                <div class="breadcrumbs__item breadcrumbs__item--separator">
                    <div class="fa fa-chevron-right"> </div>
                </div>
                <div class="breadcrumbs__item breadcrumbs__item--current">Mundo Experto</div>
            </div>
            <div class="pagemenu">
                <div class="pagemenu__container">
                    <a class="pagemenu__link observe" href="{{ route('expert-logo') }}" title="Logotipo" data-observe-animation="fadeInUp" data-observe-delay="400">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/logotipo.svg" alt="Logotipo" />
                        <div class="pagemenu__link__label">Logotipo</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('expert-category') }}" title="Logotipo" data-observe-animation="fadeInUp" data-observe-delay="400">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/category.svg" alt="Logotipo" />
                        <div class="pagemenu__link__label">Categorias</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('expert-color') }}" title="Color" data-observe-animation="fadeInUp" data-observe-delay="600">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/color.svg" alt="Color" />
                        <div class="pagemenu__link__label">Color</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('expert-image') }}" title="Imagen" data-observe-animation="fadeInUp" data-observe-delay="800">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/imagen.svg" alt="Imagen" />
                        <div class="pagemenu__link__label">Imagen</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('expert-uses') }}" title="Usos" data-observe-animation="fadeInUp" data-observe-delay="1000">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/usos.svg" alt="Usos" />
                        <div class="pagemenu__link__label">Usos</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('expert-type') }}" title="Tipografía" data-observe-animation="fadeInUp" data-observe-delay="1200">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/mundo-experto/tipografia.svg" alt="Tipografía" />
                        <div class="pagemenu__link__label">Tipografía</div>
                    </a>
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