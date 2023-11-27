<?php

use App\Http\Controllers\PractiseController;
use Illuminate\Support\Facades\Route;

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


Route::get('/getdata' , [PractiseController::class , 'getdata'])->name('getdata');
Route::post('/postdata' , [PractiseController::class , 'postdata'])->name('postdata');
Route::post('/delete/{id}' , [PractiseController::class , 'delete'])->name('delete');

Route::get('/showall' , [PractiseController::class , 'showall'])->name('showall');
Route::get('/edit/{id}' , [PractiseController::class , 'edit'])->name('edit');
Route::post('/update/{id}' , [PractiseController::class , 'update'])->name('update');


