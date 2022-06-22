@extends('layout.backend.app',[
    'title' => 'About Aplikasi',
    'pageTitle' => 'About Aplikasi'
])
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <a href="{{ route('aboutApp.edit') }}" class="btn btn-success ">Edit Data</a>
        <!-- Approach -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About Aplikasi</h6>
            </div>
            <div class="card-body">
                    {!! $resultAbout['about_aplikasi'] !!}
            </div>
        </div>
    </div>
</div>
@stop
