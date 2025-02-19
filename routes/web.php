<?php

use App\Http\Controllers\Court_typeController;
use App\Http\Controllers\courtController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/profil/{id}', function($id){
//     return "halo ". $id;
// });

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

// Route::get('/landing', function(){
//     return view('landing');
// });

// Route::get('/project', function(){
//     return view('project');
// });

// Route::get('/service', function(){
//     return view('service');
// });

// Route::get('/Mproject', function(){
//     return view('Mproject');
// });

// Route::get('/Mdashboard', function(){
//     return view('Mdashboard');
// });

// Route::get('/Mservice', function(){
//     return view('Mservice');
// });

Route::get('/court-type', [Court_typeController::class, 'index']);
Route::post('/court', [courtController::class, 'store']);


Route::resource('court', courtController::class);

?>