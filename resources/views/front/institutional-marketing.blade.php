@extends('front.layout.master')

@section('content')

<div class="page">
    <div class="banner banner--image">
        <div class="banner__container">
            <div class="banner__content">
                <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Marketing Institucional</h1>
                <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
            </div>
            <div class="banner__image observe" data-observe-animation="fadeInRight">
                <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Marketing Institucional" title="Marketing Institucional" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/marketing-institucional.jpg" /></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
            <div class="breadcrumbs__item breadcrumbs__item--separator">
                <div class="fa fa-chevron-right"> </div>
            </div>
            <div class="breadcrumbs__item breadcrumbs__item--current">Marketing Institucional</div>
        </div>
        <section class="section section--video-gallery">
            <div class="video-gallery">
                <header class="video-gallery__header">
                    <h2 class="video-gallery__title">Avisos institucionales</h2>
                    <p class="video-gallery__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
                </header>
                <div class="video-gallery__content">
                    <div class="video-gallery__icons icons icons--gray icons--2x observe" data-observe-animation="fadeInRight" data-observe-duration="600"></div>
                    <div class="video-gallery__icons icons icons--gray icons--2x observe" data-observe-animation="fadeInLeft" data-observe-duration="600"></div>
                    <div class="swiper video-gallery__slider observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                        <div class="swiper-wrapper">
                            <div class="video-gallery__item swiper-slide"><a class="section__video" href="/video--proposito.html"><img src="https://via.placeholder.com/1090x638" />
                                    <div class="section__video__icon">
                                        <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                    </div>
                                </a></div>
                            <div class="video-gallery__item swiper-slide"><a class="section__video" href="/video--proposito.html"><img src="https://via.placeholder.com/1090x638" />
                                    <div class="section__video__icon">
                                        <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                    </div>
                                </a></div>
                            <div class="video-gallery__item swiper-slide"><a class="section__video" href="/video--proposito.html"><img src="https://via.placeholder.com/1090x638" />
                                    <div class="section__video__icon">
                                        <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--video-gallery">
            <div class="video-gallery">
                <header class="video-gallery__header">
                    <h2 class="video-gallery__title">Terapia de Hogar</h2>
                    <p class="video-gallery__description">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
                </header>
                <div class="video-gallery__content">
                    <div class="video-gallery__icons icons icons--gray icons--2x observe" data-observe-animation="fadeInRight" data-observe-duration="600"></div>
                    <div class="video-gallery__icons icons icons--gray icons--2x observe" data-observe-animation="fadeInLeft" data-observe-duration="600"></div>
                    <div class="swiper video-gallery__slider observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                        <div class="swiper-wrapper">
                            <div class="video-gallery__item swiper-slide"><a class="section__video" href="/video--proposito.html"><img src="https://via.placeholder.com/1090x638" />
                                    <div class="section__video__icon">
                                        <div class="section__video__icon__item"><i class="fa fa-play"></i></div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection