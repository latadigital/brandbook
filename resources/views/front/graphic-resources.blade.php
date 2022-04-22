@extends('front.layout.master')

@section('content')

<div class="page">
    <div class="banner banner--image">
        <div class="banner__container">
            <div class="banner__content">
                <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Recursos gráficos</h1>
                <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
            </div>
            <div class="banner__image observe" data-observe-animation="fadeInRight">
                <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Recursos gráficos" title="Recursos gráficos" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/recursos-graficos.jpg" /></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
            <div class="breadcrumbs__item breadcrumbs__item--separator">
                <div class="fa fa-chevron-right"> </div>
            </div>
            <div class="breadcrumbs__item breadcrumbs__item--current">Recursos gráficos</div>
        </div>
        <section class="section section--resources">
            <h2 class="section__title">Easy</h2>
            <div class="section__items resources">
                <div class="resources__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                    <div class="resources__item__info">
                        <h3 class="resources__title">Logotipo</h3>
                        <p class="resources__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                        <div class="resources__btns"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-logotipo.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                        <div class="resources__note"><i class="fa fa-info-circle"></i><span>La descarga requiere cumplir con las pautas de la marca y de la empresa.</span></div>
                    </div>
                    <div class="resources__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/recursos-graficos/easy-logo.svg" alt="Logotipo" /></div>
                </div>
                <div class="resources__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                    <div class="resources__item__info">
                        <h3 class="resources__title">Brandbook</h3>
                        <p class="resources__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                        <div class="resources__btns"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-brandbook.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                        <div class="resources__note"><i class="fa fa-info-circle"></i><span>La descarga requiere cumplir con las pautas de la marca y de la empresa.</span></div>
                    </div>
                    <div class="resources__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/recursos-graficos/easy-brandbook.svg" alt="Brandbook" /></div>
                </div>
                <div class="resources__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                    <div class="resources__item__info">
                        <h3 class="resources__title">Imagens</h3>
                        <p class="resources__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                        <div class="resources__btns"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-fotografias.zip"><i class="fa fa-download"></i><span>Descargar</span></a><a class="btn btn--link btn--terciario btn--icono btn--icono-izq glightbox" href="https://via.placeholder.com/1280x1024" data-glightbox="type: image" data-gallery="gallery-0-2"><i class="fa fa-expand"></i><span>Galería</span></a><a class="glightbox" href="https://via.placeholder.com/1280x1024" data-glightbox="type: image" data-gallery="gallery-0-2"></a><a class="glightbox" href="https://via.placeholder.com/1280x1024" data-glightbox="type: image" data-gallery="gallery-0-2"></a><a class="glightbox" href="https://via.placeholder.com/1280x1024" data-glightbox="type: image" data-gallery="gallery-0-2"></a><a class="glightbox" href="https://via.placeholder.com/1280x1024" data-glightbox="type: image" data-gallery="gallery-0-2"></a></div>
                        <div class="resources__note"><i class="fa fa-info-circle"></i><span>La descarga requiere cumplir con las pautas de la marca y de la empresa.</span></div>
                    </div>
                    <div class="resources__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/recursos-graficos/fotografias.svg" alt="Imagens" /></div>
                </div>
                <div class="resources__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                    <div class="resources__item__info">
                        <h3 class="resources__title">Otras Descargas</h3>
                        <p class="resources__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                        <div class="resources__btns"><a class="btn btn--link btn--primario btn--icono btn--icono-izq glightbox--list" href="#list-0-3"><i class="fa fa-chevron-right"></i><span>Ver todo</span></a>
                            <div class="resources__list oculto-xs" id="list-0-3">
                                <h3>Easy</h3>
                                <h4 class="resources__title">Otras Descargas</h4>
                                <p class="resources__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                                <div class="resources__list__content">
                                    <div class="resources__list__item">
                                        <div class="resources__lits__info">
                                            <h5 class="resources__list__title">Lorem ipsum dolor</h5>
                                            <p class="resources__list__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                                        </div>
                                        <div class="resources__list__download"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-lorem.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                                    </div>
                                    <div class="resources__list__item">
                                        <div class="resources__lits__info">
                                            <h5 class="resources__list__title">Lorem ipsum dolor</h5>
                                            <p class="resources__list__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                                        </div>
                                        <div class="resources__list__download"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-lorem.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                                    </div>
                                    <div class="resources__list__item">
                                        <div class="resources__lits__info">
                                            <h5 class="resources__list__title">Lorem ipsum dolor</h5>
                                            <p class="resources__list__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                                        </div>
                                        <div class="resources__list__download"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-lorem.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                                    </div>
                                    <div class="resources__list__item">
                                        <div class="resources__lits__info">
                                            <h5 class="resources__list__title">Lorem ipsum dolor</h5>
                                            <p class="resources__list__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla.</p>
                                        </div>
                                        <div class="resources__list__download"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="/assets/downloads/easy-lorem.zip"><i class="fa fa-download"></i><span>Descargar</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection