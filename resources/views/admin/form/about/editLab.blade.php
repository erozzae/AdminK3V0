@extends('layout.backend.app',[
    'title' => 'Edit About Lab',
    'pageTitle' => 'Edit About Lab'
])
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">About Lab</h6>
            </div>
            <div class="card-body">
                    <form action="{{ route('aboutLab.update') }}" method="get">
                        @csrf
                        <div class="input-group">
                            <textarea id="edit" class="form-control" aria-label="With textarea" name="about_lab">{{ $resultAbout['about_lab'] }}</textarea>
                        </div>

                        <input required="" value="{{ $resultAbout['about_aplikasi'] }}" class="form-control" type="hidden" name="about_aplikasi">

                        <div class="row mt-3">
                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-success ">Simpan</button>
                            </div>
                            <div class="col-6 text-left">
                                <a href="{{ route('about.lab') }}" class="btn btn-success ">Kembali</a>
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


