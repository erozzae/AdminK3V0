@extends('layout.backend.app',[
    'title' => 'Edit About Aplikasi',
    'pageTitle' => 'Edit About Aplikasi'
])
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About Aplikasi</h6>
            </div>
            <div class="card-body">
                    <form action="{{ route('aboutApp.update') }}" method="get">
                        @csrf
                        <div class="input-group">
                            <textarea id="edit" class="form-control" aria-label="With textarea" name="about_aplikasi">{{ $resultAbout['about_aplikasi'] }}</textarea>
                        </div>

                        <input required="" value="{{ $resultAbout['about_lab'] }}" class="form-control" type="hidden" name="about_lab">

                        <div class="row mt-3">
                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-success ">Simpan</button>
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

@section('ckEditor')
    <script>
        ClassicEditor
            .create( document.querySelector( '#edit' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection


