<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Guzzle\Http\Client;


class AboutController extends Controller
{
    public function aboutApp(){

         //About

        //Get user token
         $token = session()->get('user')['token'];
         $responseAbout = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/about/findAbout/1');	
         $resultAbout = json_decode((string)$responseAbout->getBody(),true); //Convert

         //Get value
         $resultAbout= $resultAbout['AboutFindById'];
 
         return view('admin.aboutApp',compact('resultAbout'));
    }

    public function aboutlab(){

        //About

        //Get user token
        $token = session()->get('user')['token'];
        $responseAbout = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/about/findAbout/1');	
        $resultAbout = json_decode((string)$responseAbout->getBody(),true); //Convert

        //Get value
        $resultAbout= $resultAbout['AboutFindById'];

        return view('admin.aboutLab',compact('resultAbout'));
   }

   public function editApp(){

     //Get user token
     $token = session()->get('user')['token'];
     $responseAbout = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/about/findAbout/1');	
     $resultAbout = json_decode((string)$responseAbout->getBody(),true); //Convert

     //Get value
     $resultAbout= $resultAbout['AboutFindById'];
     // dd($resultAbout);
     return view('admin.form.about.editApp',compact('resultAbout'));
   }

   public function updateApp(Request $request){
      $token = session()->get('user')['token'];
      $response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/about/update/1', [
          'about_aplikasi'=> $request->about_aplikasi,
          'about_lab' => $request->about_lab

     ]);
		
	// $result = json_decode((string)$response->getBody(),true);
     // dd($request->toArray());
     return redirect()->route('about.app');
  }

  
  public function editLab(){

     //Get user token
     $token = session()->get('user')['token'];
     $responseAbout = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/about/findAbout/1');	
     $resultAbout = json_decode((string)$responseAbout->getBody(),true); //Convert

     //Get value
     $resultAbout= $resultAbout['AboutFindById'];
     // dd($resultAbout);
     return view('admin.form.about.editLab',compact('resultAbout'));
   }

  public function updateLab(Request $request){
     $token = session()->get('user')['token'];
     $response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/about/update/1', [
         'about_aplikasi'=> $request->about_aplikasi,
         'about_lab' => $request->about_lab

    ]);
    return redirect()->route('about.lab');
  }


}
