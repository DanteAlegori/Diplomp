<?php

use PhpParser\Node\Stmt\Static_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaticController;

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

    Route::get('/create', [App\Http\Controllers\AdminController::class, 'createbioview'])->name('createview');
    Route::post('/createe', [App\Http\Controllers\AdminController::class, 'createbio'])->name('create');
        
    Route::get('/createnews', [App\Http\Controllers\AdminController::class, 'createnews'])->name('createnewsview');
    Route::post('/createnewss', [App\Http\Controllers\AdminController::class, 'createnewss'])->name('createnews');

    Route::get('/admin_bio', [App\Http\Controllers\AdminController::class, 'allbio'])->name('admin_bio');

    Route::post('/upgratebios', [App\Http\Controllers\AdminController::class, 'updatebio'])->name('updatebios');

    Route::get('/admin-news', [App\Http\Controllers\AdminController::class, 'allnews'])->name('admin-news');

    Route::post('/upgratenews', [App\Http\Controllers\AdminController::class, 'updatenews'])->name('updatenewss');




    Route::get('/admin-categori', [App\Http\Controllers\AdminController::class, 'allcategori'])->name('all_categori');

    Route::get('/admin-categori-create', [App\Http\Controllers\AdminController::class, 'createcategori'])->name('create_categori');
    
    Route::post('/admin-categori-create', [App\Http\Controllers\AdminController::class, 'createcategorii'])->name('create_categorii');

    Route::post('/admin-add-bio-categori', [App\Http\Controllers\AdminController::class, 'addcategori_in_bio'])->name('addcategori_in_bio');





    Route::get('/add_categori/{id?}', [App\Http\Controllers\AdminController::class, 'addcategori_in_bio_view'])->name('add_categori');


    Route::get('/upgrate_news/{id?}', [App\Http\Controllers\AdminController::class, 'updatenews'])->name('upgratenew');
    Route::get('/news_delete/{id?}', [App\Http\Controllers\AdminController::class, 'deletenews'])->name('deletenews');


    Route::get('/upgrate_bio/{id?}', [App\Http\Controllers\AdminController::class, 'updatePage'])->name('upgrate');
    Route::get('/bio_delete/{id?}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');

});
