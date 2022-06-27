<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Guzzle\Http\Client;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('user.profile');
    }

    public function update(Request $request, $id)
    {
		$token = session()->get('user')['token'];
		
		$name = $request->name;
		$email = $request->email;
		$password = $request->password;
		$old_password = $request->old_password;

		// dd($password);
		

		$response = Http::withToken($token)->POST('http://127.0.0.1:8000/api/auth/profile/update/'.$id,[
			'name'=> $name,
			'email'=>$email,
			'password'=>$password,
			'old_password'=> $old_password
		]);

		// dd($request);
		
    	return redirect()->back()->with('success','Profile updated successfully. Please relogin to see updated data');

	
    }

	

}
