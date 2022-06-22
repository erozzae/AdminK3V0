@extends('layout.backend.app',[
    'title' => 'About Lab',
    'pageTitle' => 'About Lab'
])
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <a href="{{ route('aboutLab.edit') }}" class="btn btn-success ">Edit Data</a>
        <!-- Approach -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About Lab</h6>
            </div>
            <div class="card-body">
                    {!! $resultAbout['about_lab'] !!}
            </div>
        </div>
    </div>
</div>
@stop
