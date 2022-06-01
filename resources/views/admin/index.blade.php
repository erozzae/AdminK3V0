@extends('layout.backend.app',[
    'title' => 'Dashboard',
    'pageTitle' => 'Dashboard'
])
@section('content')
<!-- Content Row -->
<div class="row">
     <!-- Users -->
     <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-3">
                         <img src="{{ asset('imgIcon/users.png') }}" alt="" width="50px">
                    </div>
                    <div class="col-md-9">
                        <div class="h4 mb-1 font-weight-bold text-gray-800 ">User</div>
                        <div class="text-md font-weight-bold text-warning text-uppercase mb-1">8 User</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Materials -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-3">
                        <i><img src="{{ asset('imgIcon/materials.png') }}" alt="" width="50px"></i>
                   </div>

                    <div class="col-md-9">
                        <div class="h4 mb-1 font-weight-bold text-gray-800 ">Materi</div>
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">8 Materi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Task -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-3">
                        <i><img src="{{ asset('imgIcon/tasks.png') }}" alt="" width="50px"></i>
                    </div>
                    <div class="col-md-9">
                        <div class="h4 mb-1 font-weight-bold text-gray-800 ">Soal</div>
                        <div class="text-md font-weight-bold text-success text-uppercase mb-1">1 Soal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Content Row -->
<div class="row">
    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Introduction</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="{{ asset('template/backend/sb-admin-2') }}/img/undraw_posting_photo.svg" alt="">
                </div>
                <p> K3V0 merupakan aplikasi yang ditujukan kepada siswa SMK untuk mendapatkan informasi 
                    K3 secara mudah guna mengimplementasikan K3 saat di lab dan magang industri.
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About</h6>
            </div>
            <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                    CSS bloat and poor page performance. Custom CSS classes are used to create
                    custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with the
                    Bootstrap framework, especially the utility classes.</p>
            </div>
        </div>
    </div>
</div>
@stop
