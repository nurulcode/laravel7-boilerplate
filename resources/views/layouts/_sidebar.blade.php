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
                        <li><a href="#" cla><i class="ion ion-ios-radio-button-off"></i>Cara pembayaran</a></li>
                    </ul>
                </li>
{{--
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
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
                        <li><a href="{{ route('role.index') }}"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
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
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>Role</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User</a></li>
                        <li><a href="#"><i class="ion ion-ios-radio-button-off"></i>User Permission</a></li>
                    </ul>
                </li>

                 --}}
            @can('registrasi-list')
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ activeMenu('registrasi') }}">
                        <i class="ti-view-list-alt"></i>
                        <span> Registrasi
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse {{ activeSubMenu('registrasi') }}">
                        @can('manage-reg-pasien')
                            <li>
                                <a href="{{ route('pasien.index') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Daftar Pasien & Cetak Kartu Pasien
                                </a>
                            </li>
                        @endcan

                        @can('manage-reg-rawat-jalan')
                            <li>
                                <a href="{{ route('rawat-jalan.pasien') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Reg. Rawat Jalan
                                </a>
                            </li>
                        @endcan

                        @can('manage-reg-igd')
                            <li>
                                <a href="{{ route('rawat-darurat.index') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Reg. Gawat Darurat
                                </a>
                            </li>
                        @endcan

                        @can('manage-reg-rawat-inap')
                            <li>
                                <a href="{{ route('rawat-inap.index') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Reg. Rawat Inap
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                @endcan

            @can('system-list')
                <li>
                    <a href="javascript:void(0);" class="waves-effect {{ activeMenu('system') }}">
                        <i class="ti-view-list-alt"></i>
                        <span> Syatem Support
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu mm-collapse {{ activeSubMenu('system') }}">
                        @can('manage-role')
                            <li>
                                <a href="{{ route('role.index') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Roles
                                </a>
                            </li>
                        @endcan

                        @can('manage-user')
                        <li>
                            <a href="{{ route('user.index') }}">
                                <i class="ion ion-ios-radio-button-off"></i>
                                User
                            </a
                        @endcan

                        @can('manage-permission')
                            <li>
                                <a href="{{ route('permission.index') }}">
                                    <i class="ion ion-ios-radio-button-off"></i>
                                    Permissions
                                </a>
                            </li>
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
