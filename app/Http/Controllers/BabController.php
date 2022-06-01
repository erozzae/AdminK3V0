<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BabController extends Controller
{
    public function getAllBab(){
        $response = Http::get('http://127.0.0.1:8000/api/bab/allBab');
        $allBab = $response->json();
        $allBab = $allBab['allBab'];
    }

    public function countBab(){
        $response = Http::get('http://127.0.0.1:8000/api/bab/allBab');
        $countBab = $response->json();
        $countBab = $countBab['totalBab'];

        return view('admin.index',compact('countBab'));

    } 

}
