<div class="sidemenu observe" data-observe-animation="fadeInRight" data-observe-duration="600">
    <nav class="sidemenu__nav">
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/logo')) ? 'active' : '' }}" href="{{ route('our-brand-logo') }}">
            <div class="sidemenu__label">
                <span>Logotipo</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/color')) ? 'active' : '' }}" href="{{ route('our-brand-color') }}">
            <div class="sidemenu__label">
                <span>Color</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/imagen')) ? 'active' : '' }}" href="{{ route('our-brand-image') }}">
            <div class="sidemenu__label">
                <span>Imagen</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/usos')) ? 'active' : '' }}" href="{{ route('our-brand-uses') }}">
            <div class="sidemenu__label">
                <span>Usos</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/tipografia')) ? 'active' : '' }}" href="{{ route('our-brand-type') }}">
            <div class="sidemenu__label">
                <span>Tipografía</span>
            </div>
        </a>
		<a class="sidemenu__link {{ (request()->is('nuestra-marca/co-branding')) ? 'active' : '' }}" href="{{ route('co-branding') }}">
            <div class="sidemenu__label">
                <span>Co-Branding</span>
            </div>
        </a>
        <a class="sidemenu__link {{ (request()->is('nuestra-marca/easy-cl')) ? 'active' : '' }}" href="{{ route('easy-cl') }}">
            <div class="sidemenu__label">
                <span>Easy.cl</span>
            </div>
        </a> 
    </nav>
    <div class="sidemenu__icons icons icons--gray"></div>
</div>