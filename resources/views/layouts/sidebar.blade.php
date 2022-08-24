
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a href="{{url('/redirects')}}" class="sidebar-brand brand-logo">
            <img src="/pp/logo-removebg-preview (2) (1).png" alt="logo">
        </a>
        <!-- ** Logo Start ** -->
        <a href="{{url('/redirects')}}" class="sidebar-brand brand-logo-mini">
            <img src="/pp/logo-removebg-preview (2) (1).png" alt="logo">
        </a>
        <!-- ** Logo End ** -->
    </div>
    <ul class="nav">
        <li class="nav-item profile mt-4">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/pp/{{ auth()->user()->profile_photo_path }}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                        <span>{{ auth()->user()->role->name }}</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>


        @can("member")

            <li class="nav-item menu-items">
                <a class="nav-link linkclass disabled" href="{{url('/adminiuran')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Schedule</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link linkclass disabled" href="{{url('/adminjl')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Assesment</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link linkclass disabled" href="{{url('/ukur')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Body Measurement</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link " href="{{url('/fitt')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Body Mess Index</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link linkclass disabled" href="{{url('/absen')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table"></i>
                    </span>
                    <span class="menu-title">Absensi</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/member')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-crown"></i>
                    </span>
                    <span class="menu-title">Membership</span>
                </a>
            </li>

        @endcan
        @can('trainer')
            <li class="nav-item menu-items @if (request()->routeIs('trainer.jadwal')) active @endif" >
                <a class="nav-link" href="{{route('trainer.jadwal')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Jadwal</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.absensi')) active @endif">
                <a class="nav-link " href="{{route('trainer.absensi')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table"></i>
                    </span>
                    <span class="menu-title">Absensi</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.assessment')) active @endif">
                <a class="nav-link" href="{{route('trainer.assessment')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Assessment</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.program-latihan')) active @endif">
                <a class="nav-link" href="{{route('trainer.program-latihan')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Program Latihan</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.member')) active @endif">
                <a class="nav-link" href="{{route('trainer.member')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-crown"></i>
                    </span>
                    <span class="menu-title">Data Member</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.body-measurement')) active @endif">
                <a class="nav-link " href="{{route('trainer.body-measurement')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Body Measurement</span>
                </a>
            </li>

            <li class="nav-item menu-items @if (request()->routeIs('trainer.body-mass-index')) active @endif">
                <a class="nav-link " href="{{route('trainer.body-mass-index')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-map"></i>
                    </span>
                    <span class="menu-title">Body Mass Index</span>
                </a>
            </li>
        @endcan





    </ul>


    </ul>
</nav>
