<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::post('tasks', [TaskController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', [TaskController::class,'index']);


Route::get('/demo',function (){
    return view('demo');
});
Route::post('/test',function (){
    echo"Testing the route";
});


