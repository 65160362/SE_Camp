<?php


use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\C_titles;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource("titles", C_titles::class);

Route::get('\home', [myController::class , 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function () {
    // echo <h1> My Route Page </h1>;
    // return view('');
    // return view('myroute');
    $data = ['var_a' => 'Hello World!'];
    $data['var_b'] = 'Laravel';
    return view('myPage', $data);
});

Route::post('/my-route', function(Request $req) {
    $data['myinput'] = $req -> input('myinput');
    return view('myPage',$data);
});

Route::get('/my-display', function() {
    return view('myPage');
});

