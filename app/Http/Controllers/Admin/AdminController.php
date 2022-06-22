<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Guzzle\Http\Client;


class AdminController extends Controller
{
    public function index()
    {
        //Materials

        //Get user token
        $token = session()->get('user')['token'];
        $responseChapt = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/bab/allBab');	
        // $result = json_decode($response->getBody()->getContents());
		$resultChapt = json_decode((string)$responseChapt->getBody(),true); //Convert
        //Get value
        $totalChapter = $resultChapt['totalBab'];
        //Session
        // session()->put('totalChapter',$totalChapter);

        //
        
        //Introduction
        
        $responseIntro = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/introduction/findIntroduction/1');	
		$resultIntro = json_decode((string)$responseIntro->getBody(),true); //Convert
        //Get value
        $resultIntro= $resultIntro['IntroductionFindById'];

        //

        //About

        $responseAbout = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/about/findAbout/1');	
		$resultAbout = json_decode((string)$responseAbout->getBody(),true); //Convert
        //Get value
        $resultAbout= $resultAbout['AboutFindById'];


        //Number of questions

        $responseQuiz = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/soal/allSoal');	
        $resultQuiz = json_decode((string)$responseQuiz->getBody(),true); //Convert
        $resultQuiz = $resultQuiz['totalSoal'];

 

        return view('admin.index',compact('totalChapter','resultIntro','resultAbout','resultQuiz'));
    }
}
