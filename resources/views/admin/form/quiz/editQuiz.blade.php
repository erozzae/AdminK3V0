@extends('layout.backend.app', [
    'title' => 'Edit Question',
    'pageTitle' => 'Edit Question',
])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Question Edit Form</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('quiz.update',$quiz['id_soal']) }}" method="post">
                        @csrf
                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Question</span>
                        </div>
                        <div class="input-group mb-4">
                            <textarea id="edit" class="form-control" aria-label="With textarea" name="soal">{{ $quiz['soal'] }}</textarea>
                        </div>

                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Answer</span>
                        </div>
                        <div class="form-check mb-4">
                            <table class="container text-start">
                                <tr class="row mb-3">
                                    <td class="col">
                                        <input class="form-check-input" type="radio" name="kunci_jawaban" value="A" @if ( $quiz['kunci_jawaban'] == 'A') checked
                                        @endif>
                                        <label class="form-check-label">
                                            <span style="color: gray;font-weight:700">A</span>
                                        </label>
                                    </td>

                                    <td class="col-9">
                                        <input class="form-check-input" type="radio" name="kunci_jawaban" value="C" @if ( $quiz['kunci_jawaban'] == 'C') checked
                                        @endif>
                                        <label class="form-check-label">
                                            <span style="color: gray;font-weight:700">C</span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="row">
                                    <td class="col">
                                        <input class="form-check-input" type="radio" name="kunci_jawaban" value="B" @if ( $quiz['kunci_jawaban'] == 'B') checked
                                        @endif>
                                        <label class="form-check-label">
                                            <span style="color: gray;font-weight:700">B</span>
                                        </label>
                                    </td>

                                    <td class="col-9">
                                        <input class="form-check-input" type="radio" name="kunci_jawaban" value="D" @if ( $quiz['kunci_jawaban'] == 'D') checked
                                        @endif>
                                        <label class="form-check-label">
                                            <span style="color: gray;font-weight:700">D</span>
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="label mb-2">
                            <span style="color: black;font-weight:650">Option</span>
                        </div>
                        <div class="input-group mb-3 col-5">
                            {{-- <label for="">A</label> --}}
                            <input type="text" name="A" class="form-control" placeholder="Option A" value="{{ $quiz['A'] }}">
                        </div>
                        {{-- . --}}
                        <div class="input-group mb-3 col-5">
                            {{-- <label for="">A</label> --}}
                            <input type="text" name="B" class="form-control" placeholder="Option B" value="{{ $quiz['B'] }}">
                        </div>
                        {{-- . --}}
                        <div class="input-group mb-3 col-5">
                            {{-- <label for="">A</label> --}}
                            <input type="text" name="C" class="form-control" placeholder="Option C" value="{{ $quiz['C'] }}">
                        </div>
                        {{-- . --}}
                        <div class="input-group mb-4 col-5">
                            {{-- <label for="">A</label> --}}
                            <input type="text" name="D" class="form-control" placeholder="Option D" value="{{ $quiz['D'] }}">
                        </div>
                        

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
            .create(document.querySelector('#edit'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
