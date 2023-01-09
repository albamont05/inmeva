<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
                <h2 class="px-auto py-4">Logo</h2>
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
                <h2 class="px-auto py-4">Logo</h2>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                {{-- <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22"> --}}
                <h2 class="text-white px-auto py-4">Inmeva Logo</h2>
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17"> --}}
                <h2 class="text-white px-auto py-4">Inmeva Logo</h2>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    {{-- Menu --}}
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashboard')}}">
                        <i class="ri-apps-2-line"></i> <span>Tablero</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('opportunities')}}">
                        <i class="ri-bar-chart-line"></i> <span>Oportunidades</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="study-opportunities">
                        <i class="ri-file-list-3-line"></i> <span>Estudiar Oportunidades</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="acquisition">
                        <i class="bx bx-wallet"></i> <span>Adquisición</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="valued">
                        <i class="ri-apps-2-line"></i> <span>Puesta en valor</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-line-chart-line"></i> <span>Rentabilizar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="calendar">
                        <i class="ri-calendar-event-line"></i> <span>Agenda</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="chat">
                        <i class="ri-notification-2-line"></i> <span>Chat</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-settings-3-line"></i> <span>Ajustes</span>
                    </a>
                </li>
                 <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
