<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
{{--
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Master Data
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="#"><i class="ti-minus"></i>Role</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Master Tarif Dasar
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="#"><i class="ti-minus"></i>Role</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Registrasi
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="#"><i class="ti-minus"></i>Role</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span>Pelayanan IGD</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span>Pelayanan Rawat Jalan</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span>Pelayanan Rawat Inap</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Informasi Registrasi
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Instalasi Penunjang
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Lap Pelayanan
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Farmasi & Logistik
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Rekam Medik
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Keuangan
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Aset
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        <li><a href="{{ route('users.index') }}"><i class="ti-minus"></i>Users</a></li>
                        <li><a href="{{ route('users.roles_permission') }}"><i class="ti-minus"></i>Users Permission</a></li>
                    </ul>
                </li> --}}
            @can('system-list')
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-view-list-alt"></i>
                        <span> Syatem Support
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse">
                        @can('role')
                            <li><a href="{{ route('role.index') }}"><i class="ti-minus"></i>Role</a></li>
                        @endcan

                        @can('user')
                            <li><a href="{{ route('user.index') }}"><i class="ti-minus"></i>Users</a></li>
                        @endcan

                        @can('permission')
                            <li><a href="{{ route('permission.index') }}"><i class="ti-minus"></i>Permission</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
