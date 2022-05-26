<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fa fa-plus-square"></i>
        </div>
        <div class="sidebar-brand-text mx-3">K3V0</div>
    </a>

    <!-- Nav Item - Dashboard -->
    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @endcan

    @can('user')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User Dashboard</span></a>
    </li> -->
    @endCan

    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <!-- <i class="fas fa-fw fa-table"></i> -->
            <span>User</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user.index') }}">User</a>
            </div>
        </div>
    </li> -->
    @endcan
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('blank-page') }}">
            <i class="fa fa-exclamation-circle"></i>
            <span>About</span>
        </a>
    </li>

    @can('admin')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMateri"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-align-center"></i>
            <span>Materi</span>
        </a>
        <div id="collapseMateri" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB I</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB II</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB III</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB IV</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB V</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB VI</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB VII</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="">
                    <span class="text-white">BAB VIII</span>
                </a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>
    @endcan
   
    @can('admin')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSoal"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-check-square"></i>
            <span>Soal</span>
        </a>
        <div id="collapseSoal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB I</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB II</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB III</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB IV</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB V</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB VI</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB VII</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB VIII</span></a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>
    @endcan

    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-file-signature"></i>
            <span>Regulasi</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('login') }}"><span class="text-white">Login</span></a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('register') }}"><span class="text-white">Register</span></a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('forgot-password') }}"><span class="text-white">Forgot Password</span></a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('404-page') }}"><span class="text-white">404 Page</span></a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('chart') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('tables') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->
    {{-- ->menuju admin tables di route --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
