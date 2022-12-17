<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

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

Route::get('/', function () {return view('home');});

Route::get("/registerpage",[homeControl::class,"adminregister"]);
Route::POST("/add",[homeControl::class,'addData']);

Route::get("/viewproject",[homeControl::class,"display4supervisor"]);
Route::get("/viewallproject",[homeControl::class,"display4all"]);

Route::get("/viewprojectexaminee",[homeControl::class,"display4examiner"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/redirect", [homeControl::class,"redirectFunct"]);

Route::get("/upd/{xx}",[homeControl::class,"showtoupdateProject"]);
Route::POST("edit",[homeControl::class,'updateProject']);

Route::get("/del/{xx}/",[homeControl::class,"deleteProject"]);
