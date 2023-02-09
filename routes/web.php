<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SayController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ViewerController;
use App\Mail\AdminEmail;
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

    Route::get('change_password' , [UserAuthController::class , 'changePassword'])->name('change_password');
    Route::post('update_password' , [UserAuthController::class , 'updatePassword'])->name('update_password');

    Route::get('edit-profile-admin' , [UserAuthController::class , 'editProfile'] )->name('edit-profile-admin');
    Route::post('update-profile' , [UserAuthController::class , 'UpdateProfile'] )->name('update-profile');
});


Route::prefix('cms/admin')->middleware('auth:admin,author')->group(function () {
    Route::view('' , 'cms.parent');
    Route::view('temp' , 'cms.temp');

    Route::resource('admins' , AdminController::class);
    Route::post('update-admins/{id}' , [AdminController::class , 'update'])->name('update-admins');

    Route::resource('authors' , AuthorController::class);
    Route::post('update-authors/{id}' , [AuthorController::class , 'update'])->name('update-authors');

    Route::resource('viewers' , ViewerController::class);
    Route::post('update-viewers/{id}' , [ViewerController::class , 'update'])->name('update-viewers');
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

    Route::get('/create/meals/{id}', [MealController::class, 'createMeal'])->name('createMeal');
    Route::get('/index/meals/{id}', [MealController::class, 'indexMeal'])->name('indexMeal');

    Route::resource('article_categories' , ArticleCategoryController::class);
    Route::post('update-article_categories/{id}' , [ArticleCategoryController::class , 'update'])->name('update-article_categories');

    Route::get('/create/articles/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');
    Route::get('/index/articles/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');

    Route::resource('articles' , ArticleController::class);
    Route::post('update-articles/{id}' , [ArticleController::class , 'update'])->name('update-articles');

    Route::resource('says' , SayController::class);
    Route::post('update-says/{id}' , [SayController::class , 'update'])->name('update-says');

    Route::resource('abouts' , AboutController::class);
    Route::post('update-abouts/{id}' , [AboutController::class , 'update'])->name('update-abouts');

    Route::resource('informations' , InformationController::class);
    Route::post('update-informations/{id}' , [InformationController::class , 'update'])->name('update-informations');

    Route::resource('bookings' , BookingController::class);
    Route::post('update-bookings/{id}' , [BookingController::class , 'update'])->name('update-bookings');

    Route::resource('likes' , LikeController::class);
    Route::post('update-likes/{id}' , [LikeController::class , 'update'])->name('update-likes');

    Route::resource('comments' , CommentController::class);
    Route::post('update-comments/{id}' , [CommentController::class , 'update'])->name('update-comments');

    Route::resource('subcategories' , SubcategoryController::class);
    Route::post('update-subcategories/{id}' , [SubcategoryController::class , 'update'])->name('update-subcategories');

    Route::get('meal-restore/{id}', [MealController::class, 'restore']);
    Route::get('meal-delete/{id}', [MealController::class, 'forceDelete']);

    Route::get('article-restore/{id}', [ArticleController::class, 'restore']);
    Route::get('article-delete/{id}', [ArticleController::class, 'forceDelete']);
});

Route::get('email' , function(){
    return new AdminEmail();
});