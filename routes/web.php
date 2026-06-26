<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontrolAuth;
use App\Http\Controllers\Adminprojectcontrol;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CompanyProfileController;
# PUBLIC

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Project', [PropertiController::class, 'index']);
Route::get('/Project/{id}', [PropertiController::class, 'show']);
Route::get('/admin/projects/pdf', [Adminprojectcontrol::class, 'cetakpdf'])
    ->name('projects.pdf');
Route::post('/contact/send', [HomeController::class, 'sendContact'])->name('contact.send');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::view('/about', 'about');
Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact');


Route::prefix('admin')
    ->middleware('auth.manual')
    ->name('admin.')
    ->group(function () {
        Route::resource('artikel', AdminArtikelController::class);
    });

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');


Route::get('/admin/edit_profil', [UserController::class, 'editprofil'])
    ->name('edit_profil');

Route::post('/admin/edit_profil', [UserController::class, 'updateProfil'])
    ->name('update_profil');

Route::get('/admin/login', [KontrolAuth::class,'showloginform'])
      ->name('admin.login');

Route::post('/admin/login', [KontrolAuth::class,'login'])
    ->name('login.process');


    Route::prefix('admin')->middleware('auth.manual')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

    Route::resource('projects', Adminprojectcontrol::class);

    Route::get('/projects/pdf', [Adminprojectcontrol::class, 'cetakpdf'])->name('projects.pdf');
    Route::get('/profile',[CompanyProfileController::class,'detail'])->name('profile.detail');
Route::post('/admin/logout', [KontrolAuth::class,'logout'])
    ->name('admin.logout');
});


Route::prefix('admin')->middleware(['auth.manual', 'role:admin'])->group(function () {

    Route::get('/users', [UserController::class,'index'])->name('users.index');
    Route::get('/users/create', [UserController::class,'create'])->name('users.create');
    Route::post('/users/store', [UserController::class,'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('users.edit');
    Route::post('/users/update/{id}', [UserController::class,'update'])->name('users.update');
    Route::post('/users/delete/{id}', [UserController::class,'destroy'])->name('users.delete');

});


Route::prefix('admin')
    ->middleware(['auth.manual','role:admin'])
    ->group(function () {

    Route::get(
        '/profile/edit',
        [CompanyProfileController::class, 'edit']
    )->name('profile.edit');

    Route::put(
        '/profile/update',
        [CompanyProfileController::class, 'update']
    )->name('profile.update');

});