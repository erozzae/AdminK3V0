@extends('layout.backend.app',[
	'title' => 'Welcome',
	'pageTitle' => 'Dashboard',
])
@section('content')
<div class="jumbotron">
  {{-- <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1> --}}
  <p class="lead">Selamat Datang di Website Admin K3V0.</p>
  <hr class="my-4">
  {{-- <p>Anda login sebagai {{$result['user']['name']}}.</p> --}}
   <p>Anda login sebagai {{ session()->get('user')['name']}}</p>
   
</div>
@endsection