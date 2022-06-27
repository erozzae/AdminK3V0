<?php

use Illuminate\Support\Facades\Route;

//Namespace Auth
use App\Http\Controllers\Auth\LoginController;

//Namespace Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MaterialsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\QuizController;

//Namespace User
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Perubahan code : menghapus middleware 

// Route::view('/','welcome');

//Login

Route::view('/','auth.login')->name('login');
Route::post('/auth/login',[LoginController::class,'authenticate'])->name('login.post');


Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){
	
	Route::get('/',[AdminController::class,'index'])->name('admin');

	//Materials
	Route::get('/materials/{id}',[MaterialsController::class,'materials'])->name('materials');

	//About
	Route::get('/about/app',[AboutController::class,'aboutApp'])->name('about.app'); //Get
	Route::get('/about/lab',[AboutController::class,'aboutLab'])->name('about.lab');

	Route::get('/about/app/edit',[AboutController::class,'editApp'])->name('aboutApp.edit'); //Edit
	Route::get('/about/lab/edit',[AboutController::class,'editLab'])->name('aboutLab.edit'); 

	Route::get('/about/app/update',[AboutController::class,'updateApp'])->name('aboutApp.update'); //Update
	Route::get('/about/lab/update',[AboutController::class,'updateLab'])->name('aboutLab.update'); 

	//Quiz
	// [QuizController::class,'deleteQuiz']
	Route::post('/quiz/delete/{id_quiz}',[QuizController::class,'deleteQuiz'])->name('quiz.delete');
	Route::get('/quiz/add/{id_chapter}',[QuizController::class,'addQuiz'])->name('quiz.add');
	Route::post('/quiz/store/{id_chapter}',[QuizController::class,'storeQuiz'])->name('quiz.store'); //Store data
	Route::get('/quiz/edit/{id_quiz}',[QuizController::class,'editQuiz'])->name('quiz.edit'); //Form edit
	Route::post('/quiz/update/{id_quiz}',[QuizController::class,'updateQuiz'])->name('quiz.update'); //Update data
	Route::get('/quiz/{id_chapter}',[QuizController::class,'quiz'])->name('quiz'); //Get
	Route::get('/quiz/detail/{id_quiz}',[QuizController::class,'quizDetail'])->name('quiz.detail');

	
	// Route::post('/quiz/store/{id_bab}',[QuizAdminController::class,'storeData'])->name('quiz.stores'); //Store data

	//User
	Route::get('/user/index',[UserAdminController::class,'index'])->name('userAdmin.index'); //index
	Route::get('/user/edit/{id}',[UserAdminController::class,'editData'])->name('useredit'); //Form edit data
	Route::post('/user/update/{id}',[UserAdminController::class,'updateData'])->name('userupdate'); //Update Data
	Route::get('/user/add',[UserAdminController::class,'addData'])->name('user.add'); //Form add data
	Route::post('/user/store',[UserAdminController::class,'storeData'])->name('user.stores'); //Store data
	Route::post('/user/delete/{id}',[UserAdminController::class,'deleteData'])->name('user.delete'); //Delete
	

	//Route Rescource
	Route::resource('/user','UserController');

	//Route View
	Route::view('/404-page','admin.404-page')->name('404-page');
	Route::view('/blank-page','admin.blank-page')->name('blank-page');
	Route::view('/buttons','admin.buttons')->name('buttons');
	Route::view('/cards','admin.cards')->name('cards');
	Route::view('/utilities-colors','admin.utilities-color')->name('utilities-colors');
	Route::view('/utilities-borders','admin.utilities-border')->name('utilities-borders');
	Route::view('/utilities-animations','admin.utilities-animation')->name('utilities-animations');
	Route::view('/utilities-other','admin.utilities-other')->name('utilities-other');
	Route::view('/chart','admin.chart')->name('chart');
	Route::view('/tables','admin.tables')->name('tables');
	

});

Route::group(['namespace' => 'User','prefix' => 'user'],function(){
	Route::get('/',[UserController::class,'index'])->name('user');
	Route::get('/profile',[ProfileController::class,'index'])->name('profile');
	Route::post('/profile/update/{id}',[ProfileController::class,'update'])->name('profile.update');

});

// Route::group(['namespace' => 'Auth','middleware' => 'guest'],function(){
// 	Route::view('/login','auth.login')->name('login');
// 	Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
// });

// Other
// // Route::view('/register','auth.register')->name('register');
// Route::view('/forgot-password','auth.forgot-password')->name('forgot-password');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
