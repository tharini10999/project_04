<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ContactController;
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

//Contact
Route::get('/admin/Contact/index',[App\Http\Controllers\Admin\ContactController::class,'index'])->name('Contact.index');
Route::get('/admin/Contact/create',[App\Http\Controllers\Admin\ContactController::class,'Contactform'])->name('Contact.create');
Route::post('/admin/Contact/insert',[App\Http\Controllers\Admin\ContactController::class,'insert'])->name('Contact.insret');


//Element
Route::get('/admin/Element/index',[App\Http\Controllers\Admin\ElementController::class,'index'])->name('Element.index');

//Menu
Route::get('/admin/Menu/index',[App\Http\Controllers\Admin\MenuController::class,'index'])->name('Menu.index');
Route::get('/admin/Menu/create',[App\Http\Controllers\Admin\MenuController::class,'Menuform'])->name('Menu.create');


//Type
Route::get('/admin/Type/index',[App\Http\Controllers\Admin\TypeController::class,'index'])->name('Type.index');
Route::get('/admin/Type/create',[App\Http\Controllers\Admin\TypeController::class,'Typeform'])->name('Type.create');


