<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
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


// Route::get('/',[App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');

Route::get('/',[App\Http\Controllers\MasterController::class,'index'])->name('layouts.fornt-end.master');

Route::get('/flowering-plant',[App\Http\Controllers\FloweringPlantController::class,'index'])->name('layouts.fornt-end.flowering-plant');

Route::get('/foliage-plant',[App\Http\Controllers\FoliagePlantController::class,'index'])->name('layouts.fornt-end.foliage-plant');

Route::get('/purify-the-air',[App\Http\Controllers\PurifyTheAirController::class,'index'])->name('layouts.fornt-end.purify-the-air');

Route::get('/cactus',[App\Http\Controllers\CactusController::class,'index'])->name('layouts.fornt-end.cactus');

Route::get('/member',[App\Http\Controllers\MemberController::class,'index'])->name('layouts.fornt-end.member');

Route::get('/location',[App\Http\Controllers\LocationController::class,'index'])->name('layouts.fornt-end.location');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about',function(){
return"เกี่ยวกับ";
});

Auth::routes();

//profile
Route::get('/home',[HomeController::class,'index'])->name('home');

//admin
Route::get('/admin/index',[HomeController::class,'admin'])->name('admin');

//Content
Route::get('/admin/Content/index',[App\Http\Controllers\Admin\ContentController::class,'index'])->name('Content.index');
Route::get('/admin/Content/create',[App\Http\Controllers\Admin\ContentController::class,'contentform'])->name('Content.create');
Route::post('/admin/Content/insert',[App\Http\Controllers\Admin\ContentController::class,'insert'])->name('Content.insert');

Route::get('/admin/Content/edit/{id}',[App\Http\Controllers\Admin\ContentController::class,'edit'])->name('Content.edit');
Route::post('/admin/Content/update/{id}',[App\Http\Controllers\Admin\ContentController::class,'update'])->name('Content.update');
Route::get('/admin/Content/delete/{id}',[App\Http\Controllers\Admin\ContentController::class,'delete'])->name('Content.delete');

//Element
Route::get('/admin/Element/index',[App\Http\Controllers\Admin\ElementController::class,'index'])->name('Element.index');

//Menu
Route::get('/admin/Menu/index',[App\Http\Controllers\Admin\MenuController::class,'index'])->name('Menu.index');
Route::get('/admin/Menu/create',[App\Http\Controllers\Admin\MenuController::class,'Menuform'])->name('Menu.create');
Route::post('/admin/Menu/insert',[App\Http\Controllers\Admin\MenuController::class,'insert'])->name('Menu.insert');

Route::get('/admin/Menu/edit/{id}',[App\Http\Controllers\Admin\MenuController::class,'edit'])->name('Menu.edit');
Route::post('/admin/Menu/update/{id}',[App\Http\Controllers\Admin\MenuController::class,'update'])->name('Menu.update');
Route::get('/admin/Menu/delete/{id}',[App\Http\Controllers\Admin\MenuController::class,'delete'])->name('Menu.delete');

//Type
Route::get('/admin/Type/index',[App\Http\Controllers\Admin\TypeController::class,'index'])->name('Type.index');
Route::get('/admin/Type/create',[App\Http\Controllers\Admin\TypeController::class,'Typeform'])->name('Type.create');
Route::post('/admin/Type/insert',[App\Http\Controllers\Admin\TypeController::class,'insert'])->name('Type.insert');

Route::get('/admin/Type/edit/{id}',[App\Http\Controllers\Admin\TypeController::class,'edit'])->name('Type.edit');
Route::post('/admin/Type/update/{id}',[App\Http\Controllers\Admin\TypeController::class, 'update'])->name('Type.update');
Route::get('/admin/Type/delete/{id}',[App\Http\Controllers\Admin\TypeController::class,'delete'])->name('Type.delete');

