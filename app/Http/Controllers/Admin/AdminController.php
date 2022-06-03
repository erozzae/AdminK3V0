<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $userApi = Http::get('http://127.0.0.1:8000/api/bab/allBab');
        $allBab = $userApi->json();
        $countUser = User::all();
        $countUser = $countUser->count();
       
        
        $introApi = Http::post('http://127.0.0.1:8000/api/introduction/findIntroduction/1');
        $intro = $introApi->json();
        $intro = $intro['IntroductionFindById'];
        
        $aboutApi = Http::post('http://127.0.0.1:8000/api/about/findAbout/1');
        $about = $aboutApi->json();
        $about = $about['AboutFindById'];

        $allchapterAPi = Http::get('http://127.0.0.1:8000/api/bab/allBab'); 
        $chapter = $allchapterAPi->json();
        $chapter = $chapter['allBab'];

        
        return view('admin.index',compact('allBab','countUser','intro','about','chapter'));
    }
}
