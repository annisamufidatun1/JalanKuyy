<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\bookmarkController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[dashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::controller(ProfileController::class)->group(function () {
//     Route::get('/nyoba', 'daftar');
// });
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard',[adminController::class, 'dashboardadmin']);
    Route::get('/template', [adminController::class,'template']);
    // Route::get('/registform', [adminController::class,'registforms']);
    Route::post('/upload/proses', [adminController::class, 'uploadproses']);
    Route::get('/admin', [adminController::class,'dashboardadmin']);
    Route::post('/approve/{id}', [adminController::class, 'approve'])->name('approve');
    Route::post('/process', [adminController::class,'getEvent']);
    Route::get('/admin/refund-form/{id}', [adminController::class, 'refundForm'])->name('refundForm');
    Route::post('/admin/refund-form/upload',[adminController::class,'uploadRefund']);
});
Route::controller(adminController::class)->group(function () {
    Route::get('/registform', 'registform');
    Route::post('/upload/proses','uploadproses');
});
Route::controller(EventController::class)->group(function () {
    Route::get('/detail-event/{id}', 'detailEvent');
    Route::get('/discovery', 'discovery');

    Route::post('/detail-event/upload-review','uploadReview');
    Route::post('/detail-event/upload-bookmark','uploadBookmark');
    Route::post('/detail-event/delete-bookmark','deleteBookmark');

    Route::get('/register-event', 'registeventuser');
    Route::get('/register-event/rejected/detail-issue/{id}', 'rejectedevent');
    Route::get('register-event/rejected/detail-issue/download/{id}', [EventController::class, 'download'])->name('download.photo');
});
Route::controller(settingsController::class)->group(function () {
    Route::get('/settings/reportbug', 'reportbugform');
    Route::post('/settings/reportbug/success', [settingsController::class, 'store']);
    Route::get('/settings/reportbug/success', 'reportbugsuccess');
    Route::get('/settings', 'settings');
    Route::get('/settings/editprofile', 'editprofile');
    Route::get('/settings/aboutus', 'aboutus');
});
Route::get('/random-event', [EventController::class, 'randomEvent'])->name('random-event');

Route::controller(bookmarkController::class)->group(function () {
    Route::get('/bookmark', 'bookmark');
    Route::post('/bookmark/delete-bookmark','deleteBookmark');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard/search', 'cari');
});


