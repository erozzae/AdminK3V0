@extends('layout.backend.app', [
    'title' => 'User',
    'pageTitle' => 'User',
])

@push('css')
    <link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
@endpush

@section('content')
    <div class="notify"></div>

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{ route('user.add') }}">
                Insert User
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered data-table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    @foreach ($allUser as $user)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>@if ($user['level'] == 'admin')
                                    Admin
                                @else
                                    User
                                @endif</td>
                                
                                <form action="{{ route('useredit',$user['id']) }}" method="GET">
                                    @csrf
                                    <td>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </td>
                                   
                                </form>
                               
                                <form action="{{ route('user.delete',$user['id']) }}" method="post">
                                    @csrf
                                    <td>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </td>
                                </form>
                               
                            </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>



@stop
