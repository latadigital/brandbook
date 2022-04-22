@extends('front.layout.master')

@section('content')

    <div class="page">
        <div class="banner banner--image">
            <div class="banner__container">
                <div class="banner__content">
                    <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                    <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Logotipo</h1>
                    <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Se define como imagotipo ya que junto al texto existe otro elemento pictográfico. Fue diseñado para transmitir la esencia de nuestra marca y para reflejar fielmente sus rasgos de personalidad. Es el elemento de identidad por excelencia y el que firma todas nuestras comunicaciones.</p>
                </div>
                <div class="banner__image observe" data-observe-animation="fadeInRight">
                    <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Logotipo" title="Logotipo" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/nuestra-marca--logotipo.jpg" /></div>
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
                <div class="breadcrumbs__item breadcrumbs__item--current">Logotipo</div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-3">
                    @include('front.our-brand.sidemenu')
                </div>
                <div class="col-xs-12 col-lg-9">
                    <div class="content">
                        <div class="preview logo-preview">
                            <div class="preview__header">
                                <div class="preview__color-selector">
                                    <div class="preview__color-selector__label">Background</div>
                                    <div class="preview__color-selector__items">
                                        <div class="preview__color-selector__item active" style="background:#e00111" data-description="Cuando la marca aplica sobre fondos de color institucional, la sombra debe eliminarse." data-sheme="dark" data-background="#E00111" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--plano.svg"></div>
                                        <div class="preview__color-selector__item" style="background:#fff" data-description="La marca Easy está delimitada en su contorno por un sombreado, que se utiliza para poder visualizarla cuando se aplica sobre fondos blancos o para generar una separación cuando se aplica sobre Fotografías o Imágenes con información." data-sheme="light" data-background="#FFFFFF" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--default.svg"></div>
                                        <div class="preview__color-selector__item" style="background:#ffef00" data-sheme="light" data-background="#FFEF00" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--default.svg"></div>
                                        <div class="preview__color-selector__item" style="background:#2e2e36" data-sheme="dark" data-background="#2E2E36" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--plano.svg"></div>
                                        <div class="preview__color-selector__item" style="background:#f6f6f6" data-sheme="light" data-background="#F6F6F6" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--default.svg"></div>
                                    </div>
                                </div>
                                <div class="preview__variations">
                                    <div class="form__toggle preview__variations__item" style="width:90px"><label for="area">Área</label><input class="preview__variations__input" type="checkbox" name="area" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--area.svg" />
                                        <div class="form__toggle__item"></div>
                                    </div>
                                    <div class="form__toggle preview__variations__item" style="width:90px"><label for="grid">Grilla</label><input class="preview__variations__input" type="checkbox" name="grid" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--grid.svg" />
                                        <div class="form__toggle__item"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="preview__body">
                                <div class="preview__area" style="background:#e00111">
                                    <div class="preview__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--plano.svg" /></div>
                                    <div class="preview__description">Cuando la marca aplica sobre fondos de color institucional, la sombra debe eliminarse.</div>
                                </div>
                            </div>
                        </div>
                        <div class="content__item content--evolution">
                            <h3>Evolución</h3>
                            <div class="logo-evolution swiper swiper--evolution">
                                <div class="swiper-wrapper">
                                    <div class="logo-evolution__item swiper-slide">
                                        <div class="logo-evolution__logo"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logo--1--easy.svg" /></div>
                                        <div class="logo-evolution__label">1993</div>
                                    </div>
                                    <div class="logo-evolution__item swiper-slide">
                                        <div class="logo-evolution__logo"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logo--2--easy.svg" /></div>
                                        <div class="logo-evolution__label">2005</div>
                                    </div>
                                    <div class="logo-evolution__item swiper-slide">
                                        <div class="logo-evolution__logo"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/logos/easy-logo--shadow.svg" /></div>
                                        <div class="logo-evolution__label">2011</div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
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
                                        <div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/nuestra-marca/logotipo/tamano-3.svg') }}" alt="Tamaño Mínimo" /></div>
                                    </div>
                                </div>
                                <div class="choices__item" style="background-color:undefined;display:none" data-tooltip="2 CM">
                                    <div class="choices__item__content">
                                        <div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/nuestra-marca/logotipo/tamano-2.svg') }}" alt="Tamaño Mínimo" /></div>
                                    </div>
                                </div>
                                <div class="choices__item" style="background-color:undefined;display:none" data-tooltip="1 CM">
                                    <div class="choices__item__content">
                                        <div class="choices__item__image"><img src="{{ asset('front/assets/img/pages/nuestra-marca/logotipo/tamano-1.svg') }}" alt="Tamaño Mínimo" /></div>
                                    </div>
                                </div>
                            </div>
                            <p>Respetar el tamaño mínimo de reducción a 1 cm de diámetro, sin claim.</p>
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