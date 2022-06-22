<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{

		// $allchapterAPi = Http::get('http://127.0.0.1:8000/api/bab/allBab'); 
        // $chapter = $allchapterAPi->json();
        // $chapter = $chapter['allBab'];

		return view('user.index');
	}
}
