@extends('layout.backend.app',[
    'title' => 'Insert User',
    'pageTitle' => 'Insert User'
])
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-lg-7 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Insert Form</h6>
            </div>
            <div class="card-body">
                    <form action="{{ route('user.stores') }}" method="post">
                       @csrf
                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Username</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Username">
                        </div>
                        
                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Email</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Password</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="level" value="admin">
                            <label class="form-check-label">
                              admin
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="level" value="auth" checked>
                            <label class="form-check-label">
                              user
                            </label>
                          </div>

                        <div class="row mt-3">
                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            <div class="col-6 text-left">
                                <button class="btn btn-success ">Kembali</button>
                                
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@stop



