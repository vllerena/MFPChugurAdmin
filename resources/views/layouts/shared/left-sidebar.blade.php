<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <div class="user-box text-center">
            <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Administración</li>
                <li>
                    <a href="{{route('admin.dashboard.index')}}">
                        <i data-feather="calendar"></i>
                        <span> Inicio </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarEmpresas" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span> Empresas </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmpresas">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.empresa.index')}}">Listar</a>
                            </li>
                            <li>
                                <a href="{{route('admin.empresa.create')}}">Registrar Empresa</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarSucursales" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span> Sucursales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSucursales">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.sucursal.index')}}">Listar</a>
                            </li>
                            <li>
                                <a href="{{route('admin.sucursal.create')}}">Registrar Sucursal</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('admin.empleado.index')}}">
                        <i data-feather="calendar"></i>
                        <span> Empleados </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.producto.index')}}">
                        <i data-feather="calendar"></i>
                        <span> Productos </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.facturacion.index')}}">
                        <i data-feather="calendar"></i>
                        <span> Facturacion </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarReportes" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span> Reportes </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarReportes">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.reporte.general')}}">General</a>
                            </li>
                            <li>
                                <a href="{{route('admin.reporte.ventas')}}">Ventas</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
