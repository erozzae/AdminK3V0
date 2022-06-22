{{-- //Perubahan code : menghapus middleware dan auth nama --}}



<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fa fa-plus-square"></i>
        </div>
        <div class="sidebar-brand-text mx-3">K3V0</div>
    </a>

    <!-- Nav Item - Dashboard -->
    
    
    @if (session()->get('user')['level'] == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @endif

  

    @if (session()->get('user')['level'] == 'auth')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User Dashboard</span></a>
    </li>
    @endif

    @if (session()->get('user')['level'] == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('userAdmin.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>
   
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
            aria-expanded="true" aria-controls="collapseAbout">
            <i class="fa fa-exclamation-circle"></i>
            <span>About</span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingAbout" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <a class="nav-link" href="{{ route('about.app') }}">
                    <i class="fa fa-exclamation-circle"></i>
                    <span>Aplikasi</span>
                </a>
                <a class="nav-link" href="{{ route('about.lab') }}">
                    <i class="fa fa-exclamation-circle"></i>
                    <span>Lab</span>
                </a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>
   

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMateri"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-align-center"></i>
            <span>Materi</span>
        </a>
        <div id="collapseMateri" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              
                {{-- @foreach ($chapter as $c)
                    <a class="collapse-item mb-1 bg-transparent" href="{{ route('get-chapter',$c['id_bab']) }}">
                        <span class="text-white">{{ $c['nama_bab'] }}</span>
                    </a>
                @endforeach --}}
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',1) }}">
                    <span class="text-white">BAB I</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',2) }}">
                    <span class="text-white">BAB II</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',3) }}">
                    <span class="text-white">BAB III</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',4) }}">
                    <span class="text-white">BAB IV</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',5) }}">
                    <span class="text-white">BAB V</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',6) }}">
                    <span class="text-white">BAB VI</span>
                </a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('materials',7) }}">
                    <span class="text-white">BAB VII</span>
                </a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

   
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSoal"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-check-square"></i>
            <span>Quiz</span>
        </a>
        <div id="collapseSoal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('quiz',1) }}"><span class="text-white">BAB I</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB II</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB III</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB IV</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB V</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB VI</span></a>
                <a class="collapse-item mb-1 bg-transparent" href=""><span class="text-white">BAB VII</span></a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>
   
    @endif
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
                {{-- <a class="collapse-item mb-1 bg-transparent" href="{{ route('register') }}"><span class="text-white">Register</span></a>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('forgot-password') }}"><span class="text-white">Forgot Password</span></a> --}}
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item mb-1 bg-transparent" href="{{ route('404-page') }}"><span class="text-white">404 Page</span></a>
            </div>
        </div>
    </li>

    {{-- ->menuju admin tables di route --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
