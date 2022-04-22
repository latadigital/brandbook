<div class="sidemenu observe" data-observe-animation="fadeInRight" data-observe-duration="600">
    <nav class="sidemenu__nav">
        <a class="sidemenu__link {{ (request()->is('easycl/logo')) ? 'active' : '' }}" href="{{ route('easycl-logo') }}">
            <div class="sidemenu__label">
                <span>Logotipo</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('easycl/color')) ? 'active' : '' }}" href="{{ route('easycl-color') }}">
            <div class="sidemenu__label">
                <span>Color</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('easycl/uses')) ? 'active' : '' }}" href="{{ route('easycl-uses') }}">
            <div class="sidemenu__label">
                <span>Usos</span>
            </div>
        </a>
    </nav>
    <div class="sidemenu__icons icons icons--gray"></div>
</div>