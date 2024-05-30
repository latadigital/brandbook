<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Brand Book Easy | Inicio</title>
    <link rel="icon" type="image/x-icon" href="https://easycl.vteximg.com.br/arquivos/favicon.ico">
    <meta name="description" content="Este Brandbook es una herramienta que nos garantiza y ayuda a tener una consistencia en el uso y lenguaje de la marca Easy en todos sus aspectos conceptuales, verbales y visuales." />
    <link rel="canonical" href="https://brandbook.easy.cl/" />
    <meta property="og:title" content="Brand Book Easy | Inicio" />
    <meta property="og:description" content="Este Brandbook es una herramienta que nos garantiza y ayuda a tener una consistencia en el uso y lenguaje de la marca Easy en todos sus aspectos conceptuales, verbales y visuales." />
    <meta property="og:url" content="https://brandbook.easy.cl/" />
    <meta property="og:image" content="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/meta-images/default.jpg" />
    <link href="{{ asset('front/assets/css/main.981122a80bcde022e257.css') }}" rel="stylesheet">
    <script src="{{ asset('front/assets/js/paper.js') }}"></script>
   
</head>
<body>
    @include('front.layout.header')
    @include('front.layout.nav')

    @yield('content')

    <footer class="footer">
        <div class="footer__container container">
            <div class="footer__logo"><img class="image lozad" alt="Brand Book Easy" title="Brand Book Easy" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/easy-logo.svg" /></div>
            <div class="footer__separator"><img class="image lozad image--block" alt="Brand Book Easy" title="Brand Book Easy" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/brandbook.svg" /></div>
            <div class="footer__disclaimer">Esta guía de expresión de marca debe utilizarse junto con otras guías más específicas sobre cada elemento de nuestra marca.</div>
            <div class="footer__disclaimer">© 2021 EASY Retail S.A. Reservados todos los derechos.</div>
            <div class="footer__icons icons icons--white"></div>
        </div>
    </footer>
    <div class="float-info">
        <div class="float-info__content">
            <div class="float-info__header">
                <h4 class="float-info__title">Información</h4>
                <div class="float-info__close float-info--close"><i class="fa fa-chevron-down"></i></div>
            </div>
            <div class="float-info__body">
                <p>Para evitar errores se recomienda siempre aplicar la marca a partir de un documento digital original.</p>
            </div>
            <div class="float-info__footer text-align-right-xs"><a class="btn btn--link btn--primario btn--icono btn--icono-izq" href="#"><i class="fa fa-download"></i><span>Descargar</span></a></div>
        </div>
    </div>
    <div class="fixed-btns">
        <div class="fixed-btns__btn fixed-btns__btn--reveal fixed-btns__btn--tertiary to-top scroll-reveal" data-scroll-reveal-top="500"><i class="fa fa-chevron-up"></i></div>
        <div class="fixed-btns__btn fixed-btns__btn--primary float-info--open"><i class="fa fa-info"></i></div>
    </div>
	<!--<script defer src="{{ asset('front/assets/js/swiper.js') }}"></script> -->
    <script defer src="{{ asset('front/assets/js/main.981122a80bcde022e257.js') }}"></script> 
</body>
</html>
