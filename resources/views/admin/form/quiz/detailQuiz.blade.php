@extends('layout.backend.app', [
    'title' => 'Detail Question',
    'pageTitle' => 'Detail Question',
])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Question Detail</h6>
                </div>
                <div class="card-body">
                    <div class="label mb-2">
                        <span style="color: black;font-weight:650">Question</span>
                    </div>
                    <div class="input-group mb-2">
                        {{-- <textarea id="edit" class="form-control" aria-label="With textarea" name="soal"></textarea> --}}
                        <label for="">{!! $quiz['soal'] !!}</label>
                    </div>

                    <div class="label mb-2">
                        <span style="color: black;font-weight:650">Answer</span>
                    </div>
                    <div class="form-check mb-4">
                        <label for="">{{ $quiz['kunci_jawaban'] }}</label>
                    </div>

                    <div class="label mb-2">
                        <span style="color: black;font-weight:650">Option</span>
                    </div>
                    <div class="input-group mb-3 col-5">
                        <label for="">A. {{ $quiz['A'] }}</label>

                    </div>
                    {{-- . --}}
                    <div class="input-group mb-3 col-5">
                        <label for="">B. {{ $quiz['B'] }}</label>

                    </div>
                    {{-- . --}}
                    <div class="input-group mb-3 col-5">
                        <label for="">C. {{ $quiz['C'] }}</label>

                    </div>
                    {{-- . --}}
                    <div class="input-group mb-4 col-5">
                        <label for="">D. {{ $quiz['D'] }}</label>

                    </div>


                    <div class="row mt-3">

                        <div class="col-7 text-right">
                            <form action="{{ route('quiz', $quiz['id_bab']) }}">
                                @csrf
                                <button class="btn btn-success">Kembali</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
