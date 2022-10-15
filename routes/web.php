<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\SezioneController;

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
    return view('welcome');
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


    //logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});


Route::fallback(function(){
    return back();
});

// Route::get('/sezione/pusat', function () {
//     return view('pages.pusat');
// });

// Route::get('/sezione/bangkabelitung', function () {
//     return view('pages.bangka_belitung');
// });

// Route::get('/sezione/banten', function () {
//     return view('pages.banten');
// });

// Route::get('/sezione/banyumas', function () {
//     return view('pages.banyumas');
// });

// Route::get('/sezione/batam', function () {
//     return view('pages.batam');
// });

// Route::get('/sezione/batang', function () {
//     return view('pages.batang');
// });

// Route::get('/sezione/bekasi', function () {
//     return view('pages.bekasi');
// });

// Route::get('/sezione/blitar', function () {
//     return view('pages.blitar');
// });

// Route::get('/sezione/blora', function () {
//     return view('pages.blora');
// });

// Route::get('/sezione/bogor', function () {
//     return view('pages.bogor');
// });

// Route::get('/sezione/bojonegoro', function () {
//     return view('pages.bojonegoro');
// });

// Route::get('/sezione/boyolali', function () {
//     return view('pages.boyolali');
// });

// Route::get('/sezione/brebes', function () {
//     return view('pages.brebes');
// });

// Route::get('/sezione/cianjur', function () {
//     return view('pages.cianjur');
// });

// Route::get('/sezione/cilegon', function () {
//     return view('pages.cilegon');
// });

// Route::get('/sezione/cirebon', function () {
//     return view('pages.cirebon');
// });

// Route::get('/sezione/depok', function () {
//     return view('pages.depok');
// });

// Route::get('/sezione/gresik', function () {
//     return view('pages.gresik');
// });

// Route::get('/sezione/jakarta', function () {
//     return view('pages.jakarta');
// });

// Route::get('/sezione/jogja', function () {
//     return view('pages.jogja');
// });

// Route::get('/sezione/kotawaringinbarat', function () {
//     return view('pages.kotawaringin_barat');
// });

// Route::get('/sezione/lamongan', function () {
//     return view('pages.lamongan');
// });

// Route::get('/sezione/lampung', function () {
//     return view('pages.lampung');
// });

// Route::get('/sezione/madura', function () {
//     return view('pages.madura');
// });

// Route::get('/sezione/makassar', function () {
//     return view('pages.makassar');
// });

// Route::get('/sezione/malang', function () {
//     return view('pages.malang');
// });

// Route::get('/sezione/medan', function () {
//     return view('pages.medan');
// });

// Route::get('/sezione/minang', function () {
//     return view('pages.minang');
// });

// Route::get('/sezione/mojokerto', function () {
//     return view('pages.mojokerto');
// });

// Route::get('/sezione/muriaraya', function () {
//     return view('pages.muriaraya');
// });

// Route::get('/sezione/palembang', function () {
//     return view('pages.palembang');
// });

// Route::get('/sezione/ponorogo', function () {
//     return view('pages.ponorogo');
// });

// Route::get('/sezione/pontianak', function () {
//     return view('pages.pontianak');
// });

// Route::get('/sezione/riau', function () {
//     return view('pages.riau');
// });

// Route::get('/sezione/samarinda', function () {
//     return view('pages.samarinda');
// });

// Route::get('/sezione/semarang', function () {
//     return view('pages.semarang');
// });

// Route::get('/sezione/sidoarjo', function () {
//     return view('pages.sidoarjo');
// });

// Route::get('/sezione/squadra', function () {
//     return view('pages.squadra');
// });

// Route::get('/sezione/surabaya', function () {
//     return view('pages.surabaya');
// });





