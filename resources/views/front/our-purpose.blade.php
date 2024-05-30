
@extends('front.layout.master')

@section('content')

    <div class="page">
        <div class="container">
            <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
                <div class="breadcrumbs__item breadcrumbs__item--separator">
                    <div class="fa fa-chevron-right"> </div>
                </div><a class="breadcrumbs__item breadcrumbs__item--link" href="/video.html"><span>Video</span></a>
                <div class="breadcrumbs__item breadcrumbs__item--separator">
                    <div class="fa fa-chevron-right"> </div>
                </div>
                <div class="breadcrumbs__item breadcrumbs__item--current">Proposito</div>
            </div>
            <h1>Proposito</h1>
            <div class="video-detail video-detail--video"><video src="/assets/video/navidad-2021.mp4" cover="https://via.placeholder.com/1920x1080" controls="controls" controlsList="nodownload"></video></div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
        </div>
    </div>

@endsection