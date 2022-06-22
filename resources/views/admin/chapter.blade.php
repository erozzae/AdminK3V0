@extends('layout.backend.app',[
	'title' => 'Materi',
	'pageTitle' => 'Materi',
])
@section('content')
    {{-- <iframe src="{{ $chapter['isi_materi'] }}" title="testPdf" height="100%" width="100%" > --}}
        <h4 style="color: gray">{{ $name }}</h4>
        {{-- <embed src="data:pdf;base64,{{ chunk_split(base64_encode($chapter['isi_materi'])) }}" width="100%" height="700vh" alt="pdf" type="application/pdf" /> --}}
        <embed src="{{ $isi_materi }}" width="100%" height="600vh" alt="pdf" type="application/pdf" />
       
        {{-- <p>{{ $chapter['nama_bab'] }}</p> --}}
       
@stop
