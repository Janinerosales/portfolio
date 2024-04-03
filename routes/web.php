<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EducationalContoller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('users');
Route::resource('abouts', AboutController::class);
Route::resource('skills', SkillController::class);
Route::resource('educationals', EducationalContoller::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('webinars', WebinarController::class);
Route::resource('blogs', BlogController::class);


