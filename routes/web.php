<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/page1', function () {
    return "Hello from page 1";
});


Route::get('/', [PagesController::class, 'pageCheck'])->name('Home');
Route::get('/contact', [PagesController::class, 'pageContact'])->name('Contact');
Route::get('service', [PagesController::class, 'pageService'])->name('Service');
Route::get('/teams', [PagesController::class, 'pageTeams'])->name('Teams');
Route::get('/aboutus', [PagesController::class, 'pageAbout'])->name('About');