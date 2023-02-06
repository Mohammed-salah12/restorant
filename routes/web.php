<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MealController;
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

Route::prefix('cms/')->middleware('guest:admin,author')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'] )->name('view.login');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/admin/')->middleware('auth:admin,author')->group(function(){
    Route::get('logout' , [UserAuthController::class , 'logout'] )->name('view.test');

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


    Route::resource('meals' , MealController::class);
    Route::post('update-meals/{id}' , [MealController::class , 'update'])->name('update-meals');

    Route::resource('categories' , CategoryController::class);
    Route::post('update-categories/{id}' , [CategoryController::class , 'update'])->name('update-categories');

    Route::resource('articles' , ArticleController::class);
    Route::post('update-articles/{id}' , [ArticleController::class , 'update'])->name('update-articles');


    Route::get('/create/articles/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');
    Route::get('/index/articles/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');

});