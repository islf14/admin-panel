<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu" class="mm-active">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- <li class="mm-active"> --}}
                <li>
                    {{-- <a href="javascript: void(0);" class="has-arrow waves-effect mm-active"> --}}
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Inicio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- <li class="mm-active"><a class="active" href="{{ route('bienvenido')}}">Bienvenido</a></li> --}}
                        <li><a href="{{ route('bienvenido')}}">Bienvenido</a></li>
                        {{-- <li><a href="dashboard-saas.html">a</a></li> --}}
                        {{-- <li><a href="dashboard-crypto.html">Crypto</a></li> --}}
                    </ul>
                </li>

                {{-- <li class="menu-title">Apps</li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span>Trámites</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('tramite.create')}}">Nuevo trámite</a></li>
                        <li><a href="#">En proceso</a></li>
                        {{-- <li><a href="pages-comingsoon.html">Coming Soon</a></li> --}}
                        {{-- <li><a href="pages-timeline.html">Timeline</a></li> --}}
                        {{-- <li><a href="pages-faqs.html">FAQs</a></li> --}}
                        {{-- <li><a href="pages-pricing.html">Pricing</a></li> --}}
                        {{-- <li><a href="pages-404.html">Error 404</a></li> --}}
                        {{-- <li><a href="pages-500.html">Error 500</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Finalizados</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Task List</a></li>
                        {{-- <li><a href="tasks-kanban.html">Kanban Board</a></li> --}}
                        {{-- <li><a href="tasks-create.html">Create Task</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-pill badge-success float-right">Nuevo</span>
                        <span>Mensajes</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span>Información</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Invoice List</a></li>
                        {{-- <li><a href="invoices-detail.html">Invoice Detail</a></li> --}}
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->