<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function getAbout(){
        $aboutApi = Http::post('http://127.0.0.1:8000/api/about/findAbout/1');
        $about =  $aboutApi->json();
        $about = $about['AboutFindById'];

        $allchapterAPi = Http::get('http://127.0.0.1:8000/api/bab/allBab'); 
        $chapter = $allchapterAPi->json();
        $chapter = $chapter['allBab'];


        return view('admin.about',compact('about','chapter'));
    }
}
