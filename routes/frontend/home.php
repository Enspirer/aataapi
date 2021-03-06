<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\MediaController;
use App\Http\Controllers\Frontend\CenterController;
use App\Http\Controllers\Frontend\MeditationController;
use App\Http\Controllers\Frontend\ProgrammeController;
use App\Http\Controllers\Frontend\DonationController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about_us');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact_us');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('media', [MediaController::class, 'index'])->name('media');
Route::get('center', [CenterController::class, 'index'])->name('center');
Route::get('meditation', [MeditationController::class, 'index'])->name('meditation');
Route::get('programmes', [ProgrammeController::class, 'index'])->name('programmes');
Route::get('donations', [DonationController::class, 'index'])->name('donations');
// Route::get('programme-inside', [ProgrammeController::class, 'programmeInside'])->name('programme_inside');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
