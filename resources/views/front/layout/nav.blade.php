<div class="primary-menu" id="menu">
    <div class="primary-menu__wrap">
        <div class="primary-menu__preview">
            <div class="primary-menu__preview__item"></div>
            <div class="primary-menu__preview__title">Título prueba</div>
        </div>
        <div class="primary-menu__content"><span class="primary-menu__close primary-menu-open"><i class="fas fa-times"></i></span>
            <div class="primary-menu__container">
                <ul class="menu__list primary-menu__list">
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('/')) ? 'active' : '' }}" href="/" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/inicio.jpg" data-title="Inicio" title="Inicio">
                            <div class="menu__label primary-menu__label">
                                <span>Inicio</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('positioning')) ? 'active' : '' }}" href="{{ route('positioning') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/posicionamiento.jpg" data-title="Posicionamiento" title="Posicionamiento">
                            <div class="menu__label primary-menu__label">
                                <span>Posicionamiento</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('our-brand*')) ? 'active' : '' }}" href="{{ route('our-brand') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/nuestra-marca.jpg" data-title="Nuestra Marca" title="Nuestra Marca">
                            <div class="menu__label primary-menu__label">
                                <span>Nuestra Marca</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('easycl*')) ? 'active' : '' }}" href="{{ route('easycl') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/easy-cl.jpg" data-title="Easy.cl" title="Easy.cl">
                            <div class="menu__label primary-menu__label">
                                <span>Easy.cl</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('expert*')) ? 'active' : '' }}" href="{{ route('expert')}}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/mundo-experto.jpg" data-title="Mundo Experto" title="Mundo Experto">
                            <div class="menu__label primary-menu__label">
                                <span>Mundo Experto</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('institutional-marketing*')) ? 'active' : '' }}" href="{{ route('institutional-marketing') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/marketing-institucional.jpg" data-title="Marketing Institucional" title="Marketing Institucional">
                            <div class="menu__label primary-menu__label">
                                <span>Marketing Institucional</span>
                            </div>
                        </a></li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('endomarketing*')) ? 'active' : '' }}" href="{{ route('endomarketing') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/endomarketing.jpg" data-title="Endomarketing" title="Endomarketing">
                            <div class="menu__label primary-menu__label">
                                <span>Endomarketing</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link {{ (request()->is('graphic-resources*')) ? 'active' : '' }}" href="{{ route('graphic-resources') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/recursos-graficos.jpg" data-title="Recursos Gráficos" title="Recursos Gráficos">
                            <div class="menu__label primary-menu__label">
                                <span>Recursos Gráficos</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="primary-menu__separator"></div>
                <ul class="menu__list primary-menu__list">
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link" href="{{ route('login')}}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/ingresar.jpg" data-title="Ingresar" title="Ingresar">
                            <div class="menu__label primary-menu__label">
                                <span>Ingresar</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link" href="{{ route('login') }}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/mi-cuenta.jpg" data-title="Mi Cuenta" title="Mi Cuenta">
                            <div class="menu__label primary-menu__label">
                                <span>Mi Cuenta</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu__item primary-menu__item">
                        <a class="primary-menu__link menu__link" href="{{ route('login')}}" data-preview="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/menu/salir.jpg" data-title="Salir" title="Salir">
                            <div class="menu__label primary-menu__label">
                                <span>Salir</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>