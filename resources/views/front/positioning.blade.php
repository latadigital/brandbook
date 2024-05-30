@extends('front.layout.master')

@section('content')

    <div class="page">
        <div class="banner banner--image">
            <div class="banner__container">
                <div class="banner__content">
                    <div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
                    <h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Propuesta de Valor</h1>
                    <p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">En Easy, ofrecemos productos y servicios en un ambiente cercano e inspirador, que permita convertir cualquier espacio en un hogar.</p>
                </div>
                <div class="banner__image observe" data-observe-animation="fadeInRight">
                    <div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Propuesta de Valor" title="Propuesta de Valor" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/posicionamiento.jpg" /></div>
                </div>
            </div>
        </div>
        <section class="section section--pilares-marca">
            <div class="container">
                <div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
                    <div class="breadcrumbs__item breadcrumbs__item--separator">
                    <div class="fa fa-chevron-right"> </div>
                    </div>
                    <div class="breadcrumbs__item breadcrumbs__item--current">Propuesta de Valor</div>
                </div>
                <div class="row justify-between-md">
                    <div class="col-lg-5">
                    <h2 class="section__title observe" data-observe-animation="fadeInDown" data-observe-duration="600"><span>Nuestros Pilares de Marca</span></h2>
                    </div>
                    <div class="col-lg-5 text-align-right-xs">
                    <div class="section__icons icons icons--red observe" data-observe-animation="fadeInUp" data-observe-delay="800"></div>
                    </div>
                </div>
                <div class="section__items">
                    <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <div class="section__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                        <div class="section__item__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/pilares--surtido-personaliza.svg" alt="Surtido que personaliza" /></div>
                        <div class="section__item__image">
                            <h3 class="section__item__title">Surtido que personaliza</h3><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/posicionamiento/pilares--surtido-hogar.jpg" alt="Surtido que personaliza" />
                        </div>
                        <p class="section__item__description">Disponemos de un surtido profundo, amplio e innovador en productos que personalizan y dan identidad a tu hogar. Buscamos ser referentes en el mercado particularmente en categorías como pintura, pisos, grifería y textil.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="section__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                        <div class="section__item__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/pilares--tiendas.svg" alt="Tiendas amigables" /></div>
                        <div class="section__item__image">
                            <h3 class="section__item__title">Tiendas amigables</h3><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/posicionamiento/pilares--tiendas-amigables.jpg" alt="Tiendas amigables" />
                        </div>
                        <p class="section__item__description">Contamos con tiendas físicas a lo largo de Chile y nuestra tienda online, diseñadas para el consumidor final y profesional. Son espacios fáciles de navegar, con una estética agradable y ordenada a la vista, que invita a explorar los productos y a mejorar la experiencia de compra de nuestros clientes.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="section__item observe" data-observe-animation="fadeInUp" data-observe-duration="600">
                        <div class="section__item__icon"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/pilares--atencion-cercana.svg" alt="Atención cercana" /></div>
                        <div class="section__item__image">
                            <h3 class="section__item__title">Atención cercana</h3><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/posicionamiento/pilares--atencion-cercana.jpg" alt="Atención cercana" />
                        </div>
                        <p class="section__item__description">Comprendemos que todos nuestros clientes no son expertos en mejoramiento del hogar, por lo que buscamos hacerlos sentir cómodos, hablándoles en un lenguaje simple y cotidiano. Además, mostramos una actitud permanente de servicio y empatía enfocada en brindar el mejor servicio y asesoría.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--personalidad-marca">
            <div class="container">
                <h2 class="section__title observe" data-observe-animation="fadeInDown" data-observe-duration="600"><span>Personalidad de la Marca</span></h2>
                <div class="section__cards">
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="0">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/cercana.svg" alt="Cercana" /></div>
                            <h3 class="section__cards__title">Cercana</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Somos una marca que da valor a la cotidianidad y a las cosas simples e importantes de la vida.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="200">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/consciente.svg" alt="Consciente" /></div>
                            <h3 class="section__cards__title">Consciente</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Nos importa lo que sucede con nuestros clientes y el entorno. Por ello, nos comprometemos activamente en involucrarnos, ayudar y ser parte de nuestras comunidades.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="400">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/atractiva.svg" alt="Atractiva" /></div>
                            <h3 class="section__cards__title">Atractiva</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Reconocemos la importancia de lo estético en nuestra propuesta visual y gráfica. Transformando nuestros espacios en lugares inspiradores y acogedores.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="600">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/acogedora.svg" alt="Acogedora" /></div>
                            <h3 class="section__cards__title">Acogedora</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Estamos atentos a escuchar y comprender las sensibilidades y necesidades de nuestros clientes para ofrecerles aquello que sus hogares necesitan y los hace felices.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="800">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/joven.svg" alt="Joven" /></div>
                            <h3 class="section__cards__title">Joven</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Somos una marca joven, entendiendo la juventud como una actitud y no una cuestión de edad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--comunicacion">
            <div class="container">
                <div class="row align-middle-lg">
                    <div class="col-xs-12 col-lg-6">
                        <div class="section__icons icons icons--white observe" data-observe-animation="fadeInUp" data-observe-delay="400"></div>
                        <div class="section__image observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="600"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/pages/posicionamiento/comunicacion.jpg" alt="Nuestra Comunicación" /></div>
                    </div>
                    <div class="col-xl-1"></div>
                    <div class="col-xs-12 col-lg-5">
                        <h2 class="section__title observe" data-observe-animation="fadeInDown" data-observe-duration="600"><span>Nuestra Comunicación</span></h2>
                        <div class="section__items">
                            <div class="section__item observe" data-observe-animation="fadeInLeft" data-observe-duration="600" data-observe-delay="400">
                                <div class="section__item__desc">
                                    <p class="section__item__description">Somos una categoría de negocio que es parte del día a día de las personas, involucrándonos y comprometiéndonos con la renovación y mejoramiento físico y emocional de sus hogares.</p>
                                </div>
                            </div>
                            <div class="section__item observe" data-observe-animation="fadeInLeft" data-observe-duration="600" data-observe-delay="600">
                                <div class="section__item__desc">
                                    <p class="section__item__description">Para nosotros, el hogar es un espacio dónde se construyen momentos simples y de conexión con la familia, amigos y todos quiénes sean parte de él. Por lo que nuestra comunicación, debe transmitir esa sensación.</p>
                                </div>
                            </div>
                            <div class="section__item observe" data-observe-animation="fadeInLeft" data-observe-duration="600" data-observe-delay="800">
                                <div class="section__item__desc">
                                    <p class="section__item__description">Además, nos comprometemos no sólo con comunicar nuestro propósito, si no que vivirlo en cada cosa que hagamos y digamos. Nuestro éxito se relaciona directamente a cuanta vinculación efectiva y afectiva logremos tener con las personas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--lenguaje">
            <div class="container">
                <h2 class="section__title observe" data-observe-animation="fadeInDown" data-observe-duration="600"><span>Nuestro Lenguaje</span></h2>
                <div class="space--3"></div>
                <div class="section__cards">
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="0">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/amando-hogar.svg" alt="Amando el Hogar" /></div>
                            <h3 class="section__cards__title">Amando el Hogar</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Nunca hablamos de casas, hablamos de hogares.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="200">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/manera-cercana.svg" alt="De manera cercana" /></div>
                            <h3 class="section__cards__title">De manera cercana</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Hablamos de tú a tú. <br> No buscamos la casa piloto ni la casa perfectamente ordenada. <br> Nos gustan los lugares vividos, con identidad y realistas, sin necesariamente mostrar <br> siempre personas.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="400">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/cliches.svg" alt="Sin clichés" /></div>
                            <h3 class="section__cards__title">Sin clichés</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Hablamos de forma cotidiana, sin palabras rebuscadas y pretenciosas.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="600">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/manera-positiva.svg" alt="De manera positiva" /></div>
                            <h3 class="section__cards__title">De manera positiva</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">Somos simpáticos y amables, cuidándonos de no caer en lo ridículo. <br> Siempre usamos un tono positivo.</p>
                        </div>
                    </div>
                    <div class="section__cards__item observe" data-observe-animation="fadeInUp" data-observe-duration="600" data-observe-delay="800">
                        <div class="section__cards__content">
                            <div class="section__cards__image"><img src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/icons/posicionamiento/somos-complices.svg" alt="Somos cómplices" /></div>
                            <h3 class="section__cards__title">Somos cómplices</h3>
                        </div>
                        <div class="section__cards__desc">
                            <p class="section__cards__description">No recordamos a nuestros clientes qué tienen que hacer o lo que deben cambiar. <br> Los cambios los hacen las personas, cuando sienten que deben hacerlo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection