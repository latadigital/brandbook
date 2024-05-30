@extends('front.layout.master')

@section('content')

    <div class="page">
        <div class="banner banner--image">
            <div class="banner__container">
                <div class="banner__content">
                    <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                    <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Nuestra Marca</h1>
                    <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Para lograr una identidad visual consistente y coherente en el tiempo, es fundamental ser fiel a los lineamientos establecidos y dar uso correcto a ellos. Descubre aquí los recursos y delimitaciones gráfica con las que contamos.</p>
                </div>
                <div class="banner__image observe" data-observe-animation="fadeInRight">
                    <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Nuestra Marca" title="Nuestra Marca" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/nuestra-marca.jpg" /></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
                <div class="breadcrumbs__item breadcrumbs__item--separator">
                    <div class="fa fa-chevron-right"> </div>
                </div>
                <div class="breadcrumbs__item breadcrumbs__item--current">Nuestra Marca</div>
            </div>
            <div class="pagemenu">
                <div class="pagemenu__container">
                    <a class="pagemenu__link observe" href="{{ route('our-brand-logo') }}" title="Logotipo" data-observe-animation="fadeInUp" data-observe-delay="400">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/nuestra-marca/logotipo.svg" alt="Logotipo" />
                        <div class="pagemenu__link__label">Logotipo</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('our-brand-color') }}" title="Color" data-observe-animation="fadeInUp" data-observe-delay="600">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/nuestra-marca/color.svg" alt="Color" />
                        <div class="pagemenu__link__label">Color</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('our-brand-image') }}" title="Imagen" data-observe-animation="fadeInUp" data-observe-delay="800">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/nuestra-marca/imagen.svg" alt="Imagen" />
                        <div class="pagemenu__link__label">Imagen</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('our-brand-uses') }}" title="Usos" data-observe-animation="fadeInUp" data-observe-delay="1000">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/nuestra-marca/usos.svg" alt="Usos" />
                        <div class="pagemenu__link__label">Usos</div>
                    </a>
                    <a class="pagemenu__link observe" href="{{ route('our-brand-type') }}" title="Tipografía" data-observe-animation="fadeInUp" data-observe-delay="1200">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/nuestra-marca/tipografia.svg" alt="Tipografía" />
                        <div class="pagemenu__link__label">Tipografía</div>
                    </a>
                      {{-- <a class="pagemenu__link observe" href="{{ route('easy-cl') }}" title="Tipografía" data-observe-animation="fadeInUp" data-observe-delay="1200">
                        <img class="pagemenu__link__icon" src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/easy-cl/logotipo.svg" alt="Tipografía" />
                        <div class="pagemenu__link__label">Easy.cl</div>
                    </a> --}}
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

@endsection