<div class="sidemenu observe" data-observe-animation="fadeInRight" data-observe-duration="600">
    <nav class="sidemenu__nav">
        <a class="sidemenu__link {{ (request()->is('our-brand/logo')) ? 'active' : '' }}" href="{{ route('our-brand-logo') }}">
            <div class="sidemenu__label">
                <span>Logotipo</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('our-brand/color')) ? 'active' : '' }}" href="{{ route('our-brand-color') }}">
            <div class="sidemenu__label">
                <span>Color</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('our-brand/image')) ? 'active' : '' }}" href="{{ route('our-brand-image') }}">
            <div class="sidemenu__label">
                <span>Imagen</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('our-brand/uses')) ? 'active' : '' }}" href="{{ route('our-brand-uses') }}">
            <div class="sidemenu__label">
                <span>Usos</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('our-brand/type')) ? 'active' : '' }}" href="{{ route('our-brand-type') }}">
            <div class="sidemenu__label">
                <span>Tipografía</span>
            </div>
        </a>
    </nav>
    <div class="sidemenu__icons icons icons--gray"></div>
</div>