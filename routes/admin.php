<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\Pages\PageController;
use App\Http\Controllers\Admin\Pages\HomePageController;
use App\Http\Controllers\Admin\Pages\PageSectionController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::middleware('auth:admin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('change-password',  [DashboardController::class, 'changePassword'])->name('change-password');
    Route::post('update-password', [DashboardController::class, 'updatePassword'])->name('update-password');

    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings.update', [SettingController::class, 'update'])->name('settings.update');

    //Blog Section
    Route::resource('blog-categories', BlogCategoryController::class);
    Route::resource('blogs', BlogController::class);

    //Event Section
    Route::resource('event-categories', EventCategoryController::class);
    Route::resource('events', EventController::class);

    //FAQ Section
    Route::resource('faq-categories', FaqCategoryController::class);
    Route::resource('faqs', FaqController::class);

    Route::resource('teams', TeamController::class);
    Route::resource('awards', AwardController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('testimonials', TestimonialController::class);

    // Page Management
    Route::get('pages/homepage', [HomePageController::class, 'index'])->name('pages.homepage');
    Route::post('pages/homepage', [HomePageController::class, 'save']);

    Route::get('pages/footer', [PageSectionController::class, 'footer'])->name('pages.footer');
    Route::post('pages/footer', [PageSectionController::class, 'saveFooter']);

    Route::get('pages/common-sections', [PageSectionController::class, 'commonSections'])->name('pages.common-sections');
    Route::post('pages/common-sections', [PageSectionController::class, 'saveCommonSections']);

    Route::get('pages/{id}', [PageController::class, 'edit'])->name('pages.edit');
    Route::post('pages/staffing-solutions', [PageController::class, 'updatePageSections'])->name('pages.staffing-solutions');
    Route::post('pages/jobs-in-australia', [PageController::class, 'updatePageSections'])->name('pages.jobs-in-australia');
    Route::post('pages/{id}', [PageController::class, 'update'])->name('pages.update');
    
    Route::get('pages/{id}/subpage', [PageController::class, 'subpageCreate'])->name('pages.subpage.create');
    Route::post('pages/{id}/subpage', [PageController::class, 'subpageStore'])->name('pages.subpage.store');
    Route::get('pages/{id}/subpage/{subpage_id}', [PageController::class, 'subpageEdit'])->name('pages.subpage.edit');
    Route::post('pages/{id}/subpage/{subpage_id}', [PageController::class, 'subpageUpdate'])->name('pages.subpage.update');
    Route::delete('pages/{id}/subpage/{subpage_id}', [PageController::class, 'subpageDelete'])->name('pages.subpage.delete');
});
    
