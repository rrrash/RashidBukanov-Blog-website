<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about','App\Http\Controllers\MainController@about');

Route::get('/contact','App\Http\Controllers\MainController@contact')->name('contact');

Route::post('/contact/check','App\Http\Controllers\MainController@contact_check');

//Route::post('/contact/check', function () {
//    return view('contact_check');
//});
//Route::get('/contact-us',[\App\Http\Controllers\ContactController::class,'contact']);
// Route::get('contact',[ContactController::class,'inde']);
// Route::post('send',[ContactController::class,'send'])->name('email.send');
// Route::get('/contact/add', function () {
//     DB::table('contacts')->insert([
//         'lastName'=>'Bukanov',
//         'firstName'=>'Rashid',
//         'email' =>'lol',
//         'message'=>'ejjejejeejjejeejjeje'
//     ]);
// });