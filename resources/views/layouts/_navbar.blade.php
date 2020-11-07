<nav class="navbar-custom">
    <ul class="navbar-right list-inline float-right mb-0">
        <li class="dropdown notification-list list-inline-item">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <img src="{{ asset('assets\images\users\user-4.jpg') }}" alt="user" class="rounded-circle" /> --}}
                    <span class="text-danger">Logout</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <!-- item-->

                    <div class="dropdown-divider"></div>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="dropdown-item text-danger">
                            <i class="mdi mdi-power text-danger"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </li>
    </ul>
    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
    </ul>
</nav>
