<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\login\login;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

    //admin 1 2 5

    Route::get('/Read',[AdminController::class , 'ShowAll'])->name('AdminRead');
    Route::get('/Create',[AdminController::class , 'create'])->name('AdminCreate');
    Route::post('/Store',[AdminController::class , 'store'])->name('AdminStore');
    Route::get('/Delete/{id}',[AdminController::class , 'destroy'])->name('AdminDelete');
    Route::get('/Edit/{id}',[AdminController::class , 'edit'])->name('AdminEdit');
    Route::post('/Update/{id}',[AdminController::class , 'update'])->name('AdminUpdate');
    Route::get('/Home',[AdminController::class , 'index'])->name('AdminHome');




});

Route::prefix('category')->group(function ()
{



    Route::get('/Read',[CategoryController::class , 'ShowAll'])->name('categoryRead');
    Route::get('/Create',[CategoryController::class , 'create'])->name('categoryCreate');
    Route::post('/Store',[CategoryController::class , 'store'])->name('categoryStore');
    Route::get('/Delete/{id}',[CategoryController::class , 'destroy'])->name('categoryDelete');
    Route::get('/Edit/{id}',[CategoryController::class , 'edit'])->name('categoryEdit');
    Route::post('/Update/{id}',[CategoryController::class , 'update'])->name('categoryUpdate');




});

Route::prefix('news')->group(function ()
{


    Route::get('/Read',[NewsController::class , 'ShowAll'])->name('NewsRead');
    Route::get('/Create',[NewsController::class , 'create'])->name('NewsCreate');
    Route::post('/Store',[NewsController::class , 'store'])->name('NewsStore');
    Route::get('/Delete/{id}',[NewsController::class , 'destroy'])->name('NewsDelete');
    Route::get('/Edit/{id}',[NewsController::class , 'edit'])->name('NewsEdit');
    Route::post('/Update/{id}',[NewsController::class , 'update'])->name('NewsUpdate');

});
