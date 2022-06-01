<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController as HomeIndexController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\Upload\UploadController;
use App\Http\Controllers\Admin\Users\UsersController as AdminController_users;
use App\Http\Controllers\Admin\Account\AccountController;
use App\Http\Controllers\Admin\IndexController as AdminController_Admin;
use App\Http\Controllers\Admin\Categories\CategoriesController as AdminController_Categories;
use App\Http\Controllers\Admin\News\NewsController as AdminController_News;
use App\Http\Controllers\Admin\Feedback\FeedbackController as AdminController_Feedback;
use App\Http\Controllers\Admin\Upload\UploadController as AdminController_Upload;



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
Route::get('/', [HomeIndexController::class, 'index']);
Route::get('/index', [HomeIndexController::class, 'index']);

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/feedback', [FeedbackController::class, 'index']);
Route::get('/feedback/store', [FeedbackController::class, 'store']);


Route::get('/upload', [UploadController::class, 'index']);
Route::get('/upload/store', [UploadController::class, 'store']);

Route::get('/categories', [CategoriesController::class, 'index'])
    ->name('categories');
Route::get('/categories/{id}', [CategoriesController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/account/', AccountController::class)->name('account');
    //admin routes
    Route::group(['middleware' => 'admin','prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/', AdminController_Admin::class)
            ->name('index');
        Route::resource('/categories', AdminController_Categories::class);
        Route::resource('/news', AdminController_News::class);
        Route::resource('/feedback', AdminController_Feedback::class);
        Route::resource('/upload', AdminController_Upload::class);
        Route::resource('/users', AdminController_users::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
