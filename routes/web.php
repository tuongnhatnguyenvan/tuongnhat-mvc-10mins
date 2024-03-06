<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;


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

Route::resource('cars', CarController::class);
Route::get('cars/{car}', [CarController::class, 'show'])->name('cars.show');


Route::get('/test', function(){
    return view('test',['name'=>'Nhat nhun nhay']);
});
Route::get('/aboutme',[PagesController::class, 'about']);
