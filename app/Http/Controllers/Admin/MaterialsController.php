<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MaterialsController extends Controller
{
    public function materials($id){
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/bab/findBab/'.$id);
        $result = json_decode((string)$response->getBody(),true); //Convert	
        
        //access data
        $chapter = $result['BabById'];
        // 
        $name = $chapter['nama_bab'];
        $isi_materi = $result['materialChapter'];
       
        return view('admin.chapter',compact('isi_materi','name'));
        // dd($result);
    }
    

  
}
