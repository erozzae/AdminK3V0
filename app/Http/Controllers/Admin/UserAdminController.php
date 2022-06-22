<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Guzzle\Http\Client;

class UserAdminController extends Controller
{
    public function index()
    {   
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/user/allUser');	
        $result = json_decode((string)$response->getBody(),true); //Convert

        //Get Value
        $totalUser = $result['totalUser'];
        $allUser = $result['allUser'];
        $no = 1;

        //Session
        // session()->put(['totalUser' => $totalUser]);

        // dd($result);
        
        return view('admin.user.index',compact('totalUser','allUser','no'));
    }

    public function addData(){
        return view('admin.form.user.addUser'); 
    }
    public function storeData(Request $request){
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/user/store', [
            // 'name'=>'gab',
            // 'email'=>'gab@gmail.com',
            // 'password'=>'password',
            // 'level'=>'auth'
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=>$request->level
  
       ]);
       $result = json_decode((string)$response->getBody(),true);
       return redirect()->route('userAdmin.index');
    }

    public function editData($id){
        $userId = $id;
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/user/findUser/'.$userId);
        $result = json_decode((string)$response->getBody(),true); //Convert
        // dd($result);
        $user = $result['userById'];
        return view('admin.form.user.editUser',compact('user'));
    }

    public function updateData(Request $request,$id){
        $userId = $id;
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->post('http://127.0.0.1:8000/api/auth/user/update/'.$userId,[
            'name'=>$request->name,
            'email'=>$request->email,
            'level'=>$request->level
        ]);
        // dd($request);
        return redirect()->route('userAdmin.index');
    }

    public function deleteData($id){
        $token = session()->get('user')['token'];
        $response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/user/delete/'.$id);
        return redirect()->back();
    }

}
