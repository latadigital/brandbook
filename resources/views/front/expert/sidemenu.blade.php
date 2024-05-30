
<div class="sidemenu observe" data-observe-animation="fadeInRight" data-observe-duration="600">
    <nav class="sidemenu__nav">
        <a class="sidemenu__link {{ (request()->is('mundo-experto/logo')) ? 'active' : '' }}" href="{{ route('expert-logo') }}">
            <div class="sidemenu__label">
                <span>Logotipo</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('mundo-experto/categorias-experto')) ? 'active' : '' }}" href="{{ route('expert-category') }}">
            <div class="sidemenu__label">
                <span>Categorias</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('mundo-experto/color')) ? 'active' : '' }}" href="{{ route('expert-color') }}">
            <div class="sidemenu__label">
                <span>Color</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('mundo-experto/tipografia')) ? 'active' : '' }}" href="{{ route('expert-type') }}">
            <div class="sidemenu__label">
                <span>Tipografias</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('mundo-experto/usos')) ? 'active' : '' }}" href="{{ route('expert-uses') }}">
            <div class="sidemenu__label">
                <span>Usos</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('mundo-experto/imagen')) ? 'active' : '' }}" href="{{ route('expert-image') }}">
            <div class="sidemenu__label">
                <span>Imagen</span>
            </div>
        </a>
    </nav>
    <div class="sidemenu__icons icons icons--gray"></div>
</div>