<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
		// $allchapterAPi = Http::get('http://127.0.0.1:8000/api/bab/allBab'); 
        // $chapter = $allchapterAPi->json();
        // $chapter = $chapter['allBab'];

    	return view('user.profile');
    }

    public function update(Request $request, $id)
    {
		
    	// if ($request->password) {
		// 	$response = Http::post('http://127.0.0.1:8000/api/auth/user/update/');
    	// 	$password = Hash::make($request->password);
    	// }else{
    	// 	$password = $request->old_password;
    	// }

    	$request->request->add(['password' => $password]);
    	$user->update($request->all());
		
    	return back()->with('success','Proflie updated successfully');
    }
}
