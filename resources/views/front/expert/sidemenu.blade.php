<div class="sidemenu observe" data-observe-animation="fadeInRight" data-observe-duration="600">
    <nav class="sidemenu__nav">
        <a class="sidemenu__link {{ (request()->is('expert/logo')) ? 'active' : '' }}" href="{{ route('expert-logo') }}">
            <div class="sidemenu__label">
                <span>Logotipo</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('expert/color')) ? 'active' : '' }}" href="{{ route('expert-color') }}">
            <div class="sidemenu__label">
                <span>Color</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('expert/image')) ? 'active' : '' }}" href="{{ route('expert-image') }}">
            <div class="sidemenu__label">
                <span>Imagen</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('expert/uses')) ? 'active' : '' }}" href="{{ route('expert-uses') }}">
            <div class="sidemenu__label">
                <span>Usos</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('expert/type')) ? 'active' : '' }}" href="{{ route('expert-type') }}">
            <div class="sidemenu__label">
                <span>Tipografía</span>
            </div>
        </a>
    </nav>
    <div class="sidemenu__icons icons icons--gray"></div>
</div>