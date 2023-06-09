<?php

use PhpParser\Node\Stmt\Static_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaticController;
use App\Http\Middleware\AdminOrModerato;
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


Route::controller(StaticController::class)->group(function () {

    Route::get('/', 'index')->name('index');

    Route::get('/static/onas', 'onas')->name('onas');
});

Route::controller(BioController::class)->group(function () {

    Route::get('/bio',  'allbio')->name('allbio');

    Route::get('/one_bio/{id?}', 'bio')->name('bio_one');

    Route::get('/bios', 'index')->name('bios.index');

    Route::get('/search', 'seach')->name('search');

    Route::post('/addToFavorites/{user_id}/{bio_id}',  'addFavoriteBio')->name('addFavoriteBio');

    Route::post('/favorites/remove',  'removeFavorite')->name('removeFavorite');

    Route::get('/favorites/{user_id}',  'showFavorites')->name('showFavorites');
});


Route::controller(NewsController::class)->group(function () {
    Route::get('/news',  'allnews')->name('news');

    Route::post('/comments/{News}/{user_id?}', 'storeComment')->name('comments.store');
    
    Route::get('/one_news{id?}', 'news')->name('news_one');
});




Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');

    Route::get('/user_aplikation', [App\Http\Controllers\UserController::class, 'aplication_on_user'])->name('aplication_on_user');

    Route::post('/createEditorRequest', [App\Http\Controllers\UserController::class, 'createEditorRequest'])->name('createEditorRequest');
});



Route::middleware(['editor'])->group(function () {

    Route::get('/createuserbio', [App\Http\Controllers\UserController::class, 'createbioviewuser'])->name('createbioviewuser');
    Route::post('/createeuserbio', [App\Http\Controllers\UserController::class, 'createbiouser'])->name('createbiouser');
});



Route::middleware([AdminOrModerato::class])->group(function () {




    Route::get('/create', [App\Http\Controllers\BioController::class, 'createbioview'])->name('createview');
    Route::post('/createe', [App\Http\Controllers\BioController::class, 'createbio'])->name('create');




    Route::get('/createnews', [App\Http\Controllers\NewsController::class, 'createnews'])->name('createnewsview');
    Route::post('/createnewss', [App\Http\Controllers\NewsController::class, 'createnewss'])->name('createnews');





    Route::get('/admin_bio', [App\Http\Controllers\BioController::class, 'allbioadmin'])->name('admin_bio');

    Route::post('/upgratebios', [App\Http\Controllers\BioController::class, 'updatebio'])->name('updatebios');

    Route::get('/admin-news', [App\Http\Controllers\NewsController::class, 'allnewsadmin'])->name('admin-news');

    Route::post('/upgratenews', [App\Http\Controllers\NewsController::class, 'updatenews'])->name('updatenewss');

    Route::patch('/comments/{comment_id}', [App\Http\Controllers\NewsController::class, 'update'])->name('comments.update');

    Route::get('/comments/{comment_id}',  [App\Http\Controllers\NewsController::class, 'delete'])->name('comments.delete');

    Route::get('/chek_coments', [App\Http\Controllers\NewsController::class,  'chek_coments'])->name('chek_coments');

    Route::get('/unapproved', [App\Http\Controllers\BioController::class,  'unapproved'])->name('unapproved');

    Route::post('/approve/{id?}', [App\Http\Controllers\BioController::class,  'approve'])->name('approve');





    Route::get('/admin-categori', [App\Http\Controllers\AdminController::class, 'allcategori'])->name('all_categori');

    Route::get('/admin-categori-create', [App\Http\Controllers\AdminController::class, 'createcategori'])->name('create_categori');

    Route::post('/admin-categori-create', [App\Http\Controllers\AdminController::class, 'createcategorii'])->name('create_categorii');

    Route::post('/admin-categori-update', [App\Http\Controllers\AdminController::class, 'categoriupdate'])->name('update_categori');


    Route::post('/cat_add_bio/{id}', [App\Http\Controllers\AdminController::class, 'addcategoribio'])->name('addcategoribio');

    Route::get('/categori_add_bio/{id}', [App\Http\Controllers\AdminController::class, 'viewaddcategoribio'])->name('viewaddcategoribio');


    Route::post('/cat_add_news/{id}', [App\Http\Controllers\AdminController::class, 'addcategorinews'])->name('addcategorinews');

    Route::get('/categori_add_news/{id}', [App\Http\Controllers\AdminController::class, 'viewaddcategorinews'])->name('viewaddcategorinews');





    Route::get('/categori_update/{id?}', [App\Http\Controllers\AdminController::class, 'updatecategori'])->name('upgratecategori');
    Route::get('/categori_delete/{id?}', [App\Http\Controllers\AdminController::class, 'deletecategori'])->name('deletecategori');

    Route::get('/upgrate_news/{id?}', [App\Http\Controllers\NewsController::class, 'newsadminupdate'])->name('upgratenew');
    Route::get('/news_delete/{id?}', [App\Http\Controllers\NewsController::class, 'deletenews'])->name('deletenews');


    Route::get('/upgrate_bio/{id?}', [App\Http\Controllers\BioController::class, 'updatePage'])->name('upgrate');
    Route::get('/bio_delete/{id?}', [App\Http\Controllers\BioController::class, 'delete'])->name('delete');
});
Auth::routes();
Route::middleware(['admin'])->group(function () {


    Route::get('/admin/users/remove/{id}', [App\Http\Controllers\UserController::class, 'removeUser'])->name('admin_remove_user');

    Route::get('/admin/users_all', [App\Http\Controllers\UserController::class, 'alluser'])->name('alluser');

    Route::get('/admin/searchuser', [App\Http\Controllers\UserController::class, 'searchuser'])->name('searchuser');  

    Route::get('/admin/users_one/{id?}', [App\Http\Controllers\UserController::class, 'oneuser'])->name('oneuser');

    Route::get('/admin/makemoderator/{id?}', [App\Http\Controllers\UserController::class, 'makeModerator'])->name('makeModerator');

    Route::get('/admin/makeeditor/{id?}', [App\Http\Controllers\UserController::class, 'makeEditor'])->name('makeEditor');

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    Route::get('/viewaprove', [App\Http\Controllers\UserController::class, 'viewaprove'])->name('viewaprove');

    Route::post('/approvee/{id?}', [App\Http\Controllers\UserController::class, 'approve'])->name('approve1');

    Route::delete('/editor-requests/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('editor-requests.destroy');
});
