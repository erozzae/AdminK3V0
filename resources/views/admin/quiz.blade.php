@extends('layout.backend.app', [
    'title' => 'Quiz',
    'pageTitle' => 'Quiz',
])

{{-- @push('css')
    <link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
@endpush --}}

@section('content')
    <div class="notify"></div>

    <div class="card">
        <div class="card-header">
            {{-- <a class="btn btn-success" href="{{ route('la') }}" >
                Insert User
            </a> --}}
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
                    @foreach ($quiz as $q)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{!! $q['soal'] !!}</td>
                            <td>{!! $q['kunci_jawaban'] !!}</td>
                
                            <form action="{{ route('quiz.edit',$questionId) }}" method="get">
                                @csrf
                                <td><button type="submit" class="btn btn-primary">Edit</button> </td>
                            </form>
                            <form action="{{ route('quiz.delete',$questionId) }}" method="POST">
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>    
                            </form>
                            <form action="{{ route('quiz.detail',$questionId) }}" method="get">
                                @csrf
                                <td><button type="submit" class="btn btn-warning">Detail</button></td> 
                            </form>
                           
                        </tr>
                    </tbody>
                @endforeach
                </table>

            </div>
        </div>
    </div>



@stop
