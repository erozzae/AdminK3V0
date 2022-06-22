<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Guzzle\Http\Client;

class QuizController extends Controller
{
   
    
    public function quiz($id){
        //Get user token
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/soal/bab/findSoal/'.$id);	
        $result = json_decode((string)$response->getBody(),true); //Convert

        //Get Value
        $quiz = $result['chapterQuiz'];
        $chapterId =$result['chapterQuiz'][0]['id_bab'];
        $questionId =$result['chapterQuiz'][0]['id_soal'];
        $no = 1;

        // //Session
        // session()->put(['chapterId' => $chapterId]);
        // session()->put(['resultQuiz' => $result]);
        
        return view('admin.quiz',compact('quiz','no','chapterId','questionId'));
        
    }

    public function quizDetail($id){
        $token = session()->get('user')['token'];
        $quizId = $id;
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/soal/findSoal/'.$quizId);	
        $result = json_decode((string)$response->getBody(),true); //Convert
        $quiz = $result['GetSoalById'];
        return view('admin.form.quiz.detailQuiz',compact('quiz'));

    }

    public function addQuiz($id){
        $chapterId = $id;
        
        return view('admin.form.quiz.addQuiz',compact('chapterId'));

        // dd($id);
    }

    public function storeQuiz(Request $request, $id){
        $token = session()->get('user')['token'];
        $chapterId = $id;
        // dd($request);
        $response = Http::withToken($token)->post('http://127.0.0.1:8000/api/auth/soal/storeSoal/'.$chapterId,[
            'soal'=>$request->soal,
            'kunci_jawaban'=>$request->kunci_jawaban,
            'A'=>$request->A,
            'B'=>$request->B,
            'C'=>$request->C,
            'D'=>$request->D,
        ]);
        return redirect()->route('quiz');
    }

    public function editQuiz($id){
        $token = session()->get('user')['token'];
        $quizId = $id;
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/soal/findSoal/'.$id);	
        $result = json_decode((string)$response->getBody(),true); //Convert

        //Get value
        $quiz = $result['GetSoalById'];

        return view('admin.form.quiz.editQuiz',compact('quiz'));
    }

    public function updateQuiz(Request $request, $id){
        // $chapterId = session()->get('chapterId');
        $token = session()->get('user')['token'];
        $quizId = $id;
        // dd($quizId);
        $response = Http::withToken($token)->post('http://127.0.0.1:8000/api/auth/soal/updateSoal/'.$quizId,[
            'soal'=>$request->soal,
            'kunci_jawaban'=>$request->kunci_jawaban,
            'A'=>$request->A,
            'B'=>$request->B,
            'C'=>$request->C,
            'D'=>$request->D,
        ]);
        return redirect()->back();
    }

    public function deleteQuiz(Request $request, $id){
        
        $token = session()->get('user')['token'];
        $quizId = $id;
        $response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/soal/delete/'.$quizId);
        return redirect()->back();
    }

   
}
