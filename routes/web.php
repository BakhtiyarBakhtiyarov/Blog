<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\UserMessagesController;
use App\Http\Controllers\Admin\ResumeController;

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

Route::get('/',[HomePageController::class,'index'])->name('home');
Route::post('/send', [\App\Http\Controllers\HomePageController::class, 'user_messages'])->name('user_messages');

Route::get('control/login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('login.index');
Route::post('control/login', [\App\Http\Controllers\Admin\LoginController::class, 'authenticate'])->name('login.post');
Route::middleware(['auth'])->group(function () {
    Route::get('/control', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::prefix('control')->group(function () {
        Route::get('/about', [\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about.index');
        Route::post('/about/update', [\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');
        Route::get('/usermessages', [\App\Http\Controllers\Admin\UserMessagesController::class, 'index'])->name('usermessages.index');
        Route::post('/usermessages/delete', [\App\Http\Controllers\Admin\UserMessagesController::class, 'delete'])->name('usermessages.delete');
        Route::get('/resume', [\App\Http\Controllers\Admin\ResumeController::class, 'index'])->name('resume.index');
        Route::get('/resume/create', [\App\Http\Controllers\Admin\ResumeController::class, 'create'])->name('resume.create');
        Route::post('/resume/store', [\App\Http\Controllers\Admin\ResumeController::class, 'store'])->name('resume.store');
        Route::get('/resume/edit/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'edit'])->name('resume.edit');
        Route::post('/resume/update', [\App\Http\Controllers\Admin\ResumeController::class, 'update'])->name('resume.update');
        Route::post('/resume/delete', [\App\Http\Controllers\Admin\ResumeController::class, 'delete'])->name('resume.delete');
        Route::get('/logout', [\App\Http\Controllers\Admin\LogoutController::class, 'logout'])->name('logout');
    });
});
