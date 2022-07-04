<?php

use App\Http\Controllers\login\login;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\Site\SiteController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/


// login

Route::get('/',[LoginController::class ,'index'])->name('Login_System');


//site

Route::get('/news-project' , [SiteController::class , 'index'])->name('site');
Route::get('/single-page' , [SiteController::class ,'singlePageIndex'])->name('site-SinglePage');


//admin

Route::prefix('admin')->group(function ()
{

    //admin

    Route::get('/Read',)->name('AdminRead');
    Route::get('/Store',)->name('AdminStore');
    Route::post('/Delete/{id}',)->name('AdminDelete');
    Route::post('/Update/{id}',)->name('AdminUpdate');




});

Route::prefix('category')->group(function ()
{

    //admin

    Route::get('/Read',)->name('categoryRead');
    Route::get('/Store',)->name('categoryStore');
    Route::post('/Delete/{id}',)->name('categoryDelete');
    Route::post('/Update/{id}',)->name('categoryUpdate');




});

Route::prefix('news')->group(function ()
{

    //admin

    Route::get('/Read',)->name('newsRead');
    Route::get('/Store',)->name('newsStore');
    Route::post('/Delete/{id}',)->name('newsDelete');
    Route::post('/Update/{id}',)->name('newsUpdate');

});
