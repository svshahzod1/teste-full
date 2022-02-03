<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use \Illuminate\Support\Facades\DB;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ChefController;
use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\admin\PlaceController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about']);
Route::get('blog_single', [PageController::class, 'blog_single']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('chef', [PageController::class, 'chef']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('reservation', [PageController::class, 'reservation']);

//POST zaprosni turlari
//1.Agar ma`lumotni o`zgartirish garak bo`lsa: 
//PATCH, PUT
//2.Agar ma`lumotni o`chirish garak bo`lsa: 
//DELETE


/* Категориялар учун */
Route::get('admin/categories', [CategoryController::class, 'index'])
    ->name('admin/categories/index')
    ->middleware('auth');
Route::get('admin/categories/create', [CategoryController::class, 'create'])
    ->name('admin/categories/create')
    ->middleware('auth');
Route::post('admin/categories/store', [CategoryController::class, 'store'])
    ->name('admin/categories/store')
    ->middleware('auth');
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])
    ->name('admin/categories/edit')
    ->middleware('auth');
Route::patch('admin/categories/{id}', [CategoryController::class, 'update'])
    ->name('admin/categories/update')
    ->middleware('auth');
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])
    ->name('admin/categories/destroy')
    ->middleware('auth');



/* Поврлар учун */
Route::get('admin/chefs', [ChefController::class, 'index'])
    ->name('admin/chefs/index')
    ->middleware('auth');
Route::get('admin/chefs/create', [ChefController::class, 'create'])
    ->name('admin/chefs/create')
    ->middleware('auth');
Route::post('admin/chefs/store', [ChefController::class, 'store'])
    ->name('admin/chefs/store')
    ->middleware('auth');
Route::get('admin/chefs/{id}/edit', [ChefController::class, 'edit'])
    ->name('admin/chefs/edit')
    ->middleware('auth');
Route::patch('admin/chefs/{id}', [ChefController::class, 'update'])
    ->name('admin/chefs/update')
    ->middleware('auth');
Route::delete('admin/chefs/{id}', [ChefController::class, 'destroy'])
    ->name('admin/chefs/destroy')
    ->middleware('auth');



/* Овкатлар учун */
Route::get('admin/foods', [FoodController::class, 'index'])
    ->name('admin/foods/index')
    ->middleware('auth');
Route::get('admin/foods/create', [FoodController::class, 'create'])
    ->name('admin/foods/create')
    ->middleware('auth');
Route::post('admin/foods/store', [FoodController::class, 'store'])
    ->name('admin/foods/store')
    ->middleware('auth');
Route::get('admin/foods/{id}/edit', [FoodController::class, 'edit'])
    ->name('admin/foods/edit')
    ->middleware('auth');
Route::patch('admin/foods/{id}', [FoodController::class, 'update'])
    ->name('admin/foods/update')
    ->middleware('auth');
Route::delete('admin/foods/{id}', [FoodController::class, 'destroy'])
    ->name('admin/foods/destroy')
    ->middleware('auth');



/* Постлар */
Route::get('admin/blogs', [BlogController::class, 'index'])
    ->name('admin/blogs/index')
    ->middleware('auth');
Route::get('admin/blogs/create', [BlogController::class, 'create'])
    ->name('admin/blogs/create')
    ->middleware('auth');
Route::post('admin/blogs/store', [BlogController::class, 'store'])
    ->name('admin/blogs/store')
    ->middleware('auth');
Route::get('admin/blogs/{id}/edit', [BlogController::class, 'edit'])
    ->name('admin/blogs/edit')
    ->middleware('auth');
Route::patch('admin/blogs/{id}', [BlogController::class, 'update'])
    ->name('admin/blogs/update')
    ->middleware('auth');
Route::delete('admin/blogs/{id}', [BlogController::class, 'destroy'])
    ->name('admin/blogs/destroy')
    ->middleware('auth');


/* Хабарлар */
Route::get('admin/xabar', [MessageController::class, 'index'])
    ->name('admin/xabar/index')
    ->middleware('auth');
Route::get('admin/xabar/create', [MessageController::class, 'create'])
    ->name('admin/xabar/create')
    ->middleware('auth');
Route::post('admin/xabar/store', [MessageController::class, 'store'])
    ->name('admin/xabar/store');
Route::delete('admin/xabar/{id}', [MessageController::class, 'destroy'])
    ->name('admin/xabar/destroy')
    ->middleware('auth');



/* Мехмон */
Route::get('admin/place', [PlaceController::class, 'index'])
    ->name('admin/place/index')
    ->middleware('auth');
Route::post('admin/place/store', [PlaceController::class, 'store'])
    ->name('admin/place/store');
Route::delete('admin/place/{id}', [PlaceController::class, 'destroy'])
    ->name('admin/place/destroy')
    ->middleware('auth');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






