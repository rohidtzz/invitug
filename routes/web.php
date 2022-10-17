<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\SezioneController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    $data = App\Models\Sezione::all();
    return view('welcome',compact('data'));
});

Route::get('/sezione/{slug}', [PageController::class,'show']);



Route::get('/login', [AuthController::class,'index']);
Route::Post('/login/post', [AuthController::class,'loginpost']);


Route::group(['middleware' => ['role:admin']], function () {

    //home
    Route::get('/home', [DashboardController::class,'index']);

    //sezione
    Route::get('/home/sezione', [DashboardController::class,'sezione']);
    Route::get('/home/sezione/update', [SezioneController::class,'update']);
    // Route::get('/home/sezione/delete', [SezioneController::class,'delete']);


    //pages
    Route::get('/home/pages/', [PageController::class,'index']);
    Route::post('/home/pages/create', [PageController::class,'create']);
    Route::get('/home/pages/delete/{id}', [PageController::class,'delete']);
    Route::post('/home/pages/update', [PageController::class,'update']);

    //users
    Route::get('/home/users', [UsersController::class,'index']);
    Route::post('/home/users/update', [UsersController::class,'update']);
    Route::post('/home/users/search', [UsersController::class,'search']);


    //logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});

Route::group(['middleware' => ['role:admin,sezione']], function () {

    //home member
    Route::get('/home/member', [DashboardController::class,'member']);
    Route::post('/home/member/create', [MemberController::class,'create']);
    Route::post('/home/member/update', [MemberController::class,'update']);
    Route::get('/home/member/delete/{id}', [MemberController::class,'delete']);



    //keputusan
    Route::get('/home/member/ikut', [MemberController::class,'ikut']);
    Route::get('/home/member/tidakikut', [MemberController::class,'tidakikut']);

    //profile
    Route::get('/home/profile', [ProfileController::class,'index']);
    Route::post('/home/profile/update', [ProfileController::class,'update']);


    //logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});


Route::fallback(function(){
    return back();
});
