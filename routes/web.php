<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [StaticController::class, 'index'])->name('index');

Route::get('/static/onas', [StaticController::class, 'onas'])->name('onas');

Route::get('/static/contacts', [App\Http\Controllers\StaticController::class, 'contacts'])->name('contacts');

Route::get('/bio', [App\Http\Controllers\BioController::class, 'allbio'])->name('allbio');

Route::get('/one_bio{id?}', [App\Http\Controllers\BioController::class, 'bio'])->name('bio_one');


Auth::routes();
Route::middleware(['auth'])->group(function(){

    Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');

   
    });
    
    
Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('createview');
    Route::post('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
        
    Route::get('/admin_bio', [App\Http\Controllers\AdminController::class, 'allbio'])->name('admin_bio');

    Route::get('/upgrate', [App\Http\Controllers\AdminController::class, 'updatebio'])->name('upgrateview');
    Route::post('/upgrate', [App\Http\Controllers\AdminController::class, 'updatebio'])->name('updatebio');

    Route::get('/upgrate_bio/{id?}', [App\Http\Controllers\AdminController::class, 'updatePage'])->name('upgrate');
    Route::get('/bio_delete/{id?}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');

});
