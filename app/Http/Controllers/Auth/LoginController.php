<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Guzzle\Http\Client;

use Auth;

class LoginController extends Controller
{

	public function authenticate(Request $request)
	{
		$email = $request->email;
		$password = $request->password;
		
		$http = new \GuzzleHttp\Client();
		$response = $http->post('http://127.0.0.1:8000/api/auth/login',[
			'headers'=>[
				'Authorization'=>'Bearer'.session()->get('token.access_token')
			],
			'query'=>[
				'email'=>$email,
				'password'=>$password
			]
		]);
		

		$result = json_decode((string)$response->getBody(),true);
		
		if($result['response']==true){

			//Get value
			$idUser = $result['user']['id'];
			$name = $result['user']['name'];
			$level = $result['user']['level'];
			$token = $result['accessToken'];
			$emailUser= $result['user']['email'];
			$passUser = $result['userPass'];

			// //session
			session()->put('user',['id'=>$idUser,'name'=>$name,'level'=>$level,'token'=>$token,'email'=>$emailUser,'passUser'=>$passUser]);

			

			//Total User
			$token = session()->get('user')['token'];
			$response = Http::withToken($token)->get('http://127.0.0.1:8000/api/auth/user/allUser');	
			$result = json_decode((string)$response->getBody(),true); //Convert
	
			//Get Value
			$totalUser = $result['totalUser'];
	
			//Session
			session()->put(['totalUser' => $totalUser]);

			return view('user.index');
			
		}
		else{
			return back()->with('error','Login gagal');
		}
	}

	public function logout(Request $request){

		$token = session()->get('user')['token'];
		$logout = Http::withToken($token)->post('http://127.0.0.1:8000/api/auth/logout');
		$result = json_decode((string)$logout->getBody(),true);
		// dd($result);
		return redirect()->to('/');
	}


}
