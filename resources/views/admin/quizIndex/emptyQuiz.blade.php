@extends('layout.backend.app', [
    'title' => 'Quiz',
    'pageTitle' => 'Quiz',
])

{{-- @push('css')
    <link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
@endpush --}}
@include('layout.component.alert-dismissible')
@section('content')
    <div class="notify"></div>

    <div class="card">
        <div class="card-header">
            <form action="{{ route('quiz.add',$chapterId) }}" method="get">
                <button class="btn btn-success">Insert Question</button>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered data-table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>



@stop
