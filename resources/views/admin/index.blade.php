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
                        <div class="h4 mb-1 font-weight-bold text-gray-800 "> User</div>
                        <div class="text-md font-weight-bold text-warning text-uppercase mb-1">{{ session()->get('totalUser') }} User</div>
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
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">{{  $totalChapter }} Materi</div>
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
                        <div class="text-md font-weight-bold text-success text-uppercase mb-1">{{ $resultQuiz }} Soal</div>
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
                <p>{{ $resultIntro['introduction'] }}</p>
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
                    <p>{!! $resultAbout['about_aplikasi'] !!}</p>
            </div>
        </div>
    </div>
</div>
@stop
