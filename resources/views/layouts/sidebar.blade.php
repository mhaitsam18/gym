
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
                        <img class="img-xs rounded-circle " src="/pp/{{$foto}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{$data2}}</h5>
                        <span>User</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>


        @if($usertype =='1')

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

        @else

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/adminiuran')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-map"></i>
                </span>
                <span class="menu-title">Schedule</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/adminjl')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-map"></i>
                </span>
                <span class="menu-title">Assesment</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link " href="{{url('/ukur')}}">
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
            <a class="nav-link " href="{{url('/absen')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-table"></i>
                </span>
                <span class="menu-title">Absensi</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link " href="{{url('/trainer')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-human"></i>
                </span>
                <span class="menu-title">Personal Trainer</span>
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
        @endif





    </ul>


    </ul>
</nav>
