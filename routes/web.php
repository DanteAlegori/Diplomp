<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use PhpParser\Node\Stmt\Static_;

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


Route::controller(StaticController::class)->group(function(){

 Route::get('/','index')->name('index');

Route::get('/static/onas', 'onas')->name('onas');

Route::get('/static/contacts', 'contacts')->name('contacts'); 
});

Route::controller(BioController::class)->group(function(){

Route::get('/bio',  'allbio')->name('allbio');

Route::get('/one_bio{id?}',  'bio')->name('bio_one');

});


Route::controller(NewsController::class)->group(function(){
Route::get('/news',  'allnews')->name('news');


Route::get('/one_news{id?}', 'news')->name('news_one');

});




Auth::routes();
Route::middleware(['auth'])->group(function(){

    Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');

   });
    
    
Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('createview');
    Route::post('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
        
    Route::get('/createnews', [App\Http\Controllers\AdminController::class, 'createnews'])->name('createnewsview');
    Route::post('/createnews', [App\Http\Controllers\AdminController::class, 'createnews'])->name('createnews');

    Route::get('/admin_bio', [App\Http\Controllers\AdminController::class, 'allbio'])->name('admin_bio');

    Route::get('/upgrate', [App\Http\Controllers\AdminController::class, 'updatebio'])->name('upgrateview');
    Route::post('/upgrate', [App\Http\Controllers\AdminController::class, 'updatebio'])->name('updatebio');

    Route::get('/upgrate_bio/{id?}', [App\Http\Controllers\AdminController::class, 'updatePage'])->name('upgrate');
    Route::get('/bio_delete/{id?}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');

});
