<?php

use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminAboutControlller;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminProjekController;
use App\Http\Controllers\Admin\AdminPesanController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/defaultroute', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileCoctentroller::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth','admin');

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/skill', [SkillController::class, 'index']);
Route::get('/certificate', [CertificateController::class, 'index']);
Route::get('/projek', [ProjekController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::resource('/admin/dashboard/skill', AdminSkillController::class);
Route::resource('/admin/dashboard/contact', AdminContactController::class);
Route::resource('/admin/dashboard/certificate', AdminCertificateController::class);
Route::resource('/admin/dashboard/home', AdminHomeController::class);
Route::resource('/admin/dashboard/about', AdminAboutControlller::class);
Route::resource('/admin/dashboard/pesan', AdminPesanController::class);
Route::resource('/admin/dashboard/projek', AdminProjekController::class);
Route::delete('/skill/{id}', [AdminSkillController::class, 'destroy'])->name('admin.skill.destroy');

require __DIR__.'/auth.php';