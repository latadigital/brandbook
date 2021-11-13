<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/brand.svg') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">BrandBook</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-to-left'></i>
        </div>
    </div>


    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Análisis</li>
        <li>
            <a href="{{ route('admin_dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Gestión</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title">Usuarios</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin_admin') }}"><i class="bx bx-right-arrow-alt"></i>Administradores</a>
                </li>
                <li> <a href="{{ route('admin_user') }}"><i class="bx bx-right-arrow-alt"></i>Clientes</a></li>
                <li> <a href="{{ route('admin_product_manager') }}"><i class="bx bx-right-arrow-alt"></i>Product Managers</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin_campaign') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Campañas</div>
            </a>
        </li>
        <li class="menu-label">Organización</li>
        <li>
            <a href="{{ route("admin_media") }}">
                <div class="parent-icon"><i class='bx bx-folder'></i></div>
                <div class="menu-title">Medios</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin_calendar") }}">
                <div class="parent-icon"><i class="bx bx-calendar-week"></i></div>
                <div class="menu-title">Calendario</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
