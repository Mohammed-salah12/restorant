<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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


Route::prefix('cms/admin')->group(function () {
    Route::view('' , 'cms.parent');
    Route::view('temp' , 'cms.temp');

    Route::resource('admins' , AdminController::class);
    Route::post('update-admins/{id}' , [AdminController::class , 'update'])->name('update-admins');

    Route::resource('authors' , AuthorController::class);
    Route::post('update-authors/{id}' , [AuthorController::class , 'update'])->name('update-authors');
// ////
    Route::resource('roles' , RoleController::class);
    Route::post('update-roles/{id}' , [RoleController::class , 'update'])->name('update-roles');

// /////
    Route::resource('permissions' , PermissionController::class);
    Route::post('update-permissions/{id}' , [PermissionController::class , 'update'])->name('update-permissions');

    Route::resource('roles.permissions' , RolePermissionController::class);


    Route::resource('viewers' , ViewerController::class);
    Route::post('update-viewers/{id}' , [ViewerController::class , 'update'])->name('update-viewers');

    Route::resource('categories' , CategoryController::class);
    Route::post('update-categories/{id}' , [CategoryController::class , 'update'])->name('update-categories');

    Route::resource('articles' , ArticleController::class);
    Route::post('update-articles/{id}' , [ArticleController::class , 'update'])->name('update-articles');

    Route::resource('author_categories' , AuthorCategoryController::class);
    Route::post('update-author_categories/{id}' , [AuthorCategoryController::class , 'update'])->name('update-author_categories');

    Route::get('/create/articles/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');
    Route::get('/index/articles/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');

});