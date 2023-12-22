<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Notification\ChatNotificationController;
use App\Http\Controllers\Notification\UserNotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialiteLoginController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkProcessController;
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
// frontend route Start

Route::get('/', [FrontendController::class, 'frontSite'])->name('frontend.home');

Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::post('/store', 'store')->name('store');
});

// backend route start
Route::get('notify', [UserNotificationController::class, 'notify'])->name('notify');
Route::get('/markasread/{id}', [UserNotificationController::class, 'markasread'])->name('markasread');

//admin chat notify route start
Route::get('chat-notify', [ChatNotificationController::class, 'chatnotify'])->name('chat.notify')->middleware('auth');
Route::get('/admin/{user}/markasread/{id}', [ChatNotificationController::class, 'markasread'])->name('chat.markasread')->middleware('auth:admin');

// backend route start
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// github login
Route::get('/auth/github/redirect', [SocialiteLoginController::class, 'githubredirect'])->name('auth.github');

Route::get('/auth/github/callback', [SocialiteLoginController::class, 'githubcallback']);

// google login
Route::get('/auth/google/redirect', [SocialiteLoginController::class, 'googleredirect'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteLoginController::class, 'googlecallback']);

// facebook login
Route::get('/auth/facebook/redirect', [SocialiteLoginController::class, 'facebookredirect'])->name('auth.facebook');

Route::get('/auth/facebook/callback', [SocialiteLoginController::class, 'facebookcallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::put('user/{user}', 'update')->name('user.update');
    Route::put('phone/{user}', 'phone')->name('phone.update');
    Route::put('address/{user}', 'address')->name('address.update');
});

Route::controller(ReviewController::class)->prefix('review')->name('review.')->middleware('auth')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{review}/edit', 'edit')->name('edit');
    Route::put('/{review}', 'update')->name('update');
    Route::delete('/{review}', 'destroy')->name('destroy');
});

// chat controller start
Route::controller(ChatController::class)->group(function () {
    Route::get('/admin/{user}/chat', 'index')->name('admin.message.index')->middleware('auth:admin');
    Route::post('/admin/chat', 'adminstore')->name('admin.message.store')->middleware('auth:admin');
    Route::post('/chat', 'userstore')->name('user.message.store')->middleware('auth');
    Route::get('/fetch-chat', 'fetch_Chat')->middleware('auth');
    Route::get('/admin/fetch-chat', 'fetchChat')->middleware('auth:admin');
});
// chat controller end

// admin dashboard start
// ====================================================================
Route::controller(AdminDashboardController::class)->middleware(['auth:admin', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::controller(AdminUserController::class)->middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::put('/{user}', 'update')->name('user.update');
    Route::put('/phone/{user}', 'phone')->name('phone.update');
    Route::put('address/{user}', 'address')->name('address.update');

});

Route::controller(UserController::class)->prefix('admin/user')->name('admin.user.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/{user}/view', 'show')->name('show');
    Route::put('/block/{user}', 'block')->name('block');
    Route::put('/unblock/{user}', 'unblock')->name('unblock');
});

Route::controller(MailController::class)->prefix('admin/contact')->name('admin.contact.')->middleware('auth:admin')->group(function () {
    Route::get('/mail/{contact}', 'contactMail')->name('mail');
    Route::post('/mail-send', 'sendUserMail')->name('mail.send');
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    // Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

// service route section
Route::controller(ServiceController::class)->prefix('admin/services')->name('admin.services.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{service}/edit', 'edit')->name('edit');
    Route::put('/{service}', 'update')->name('update');
    Route::delete('/{service}', 'destroy')->name('destroy');

});

// service details section
Route::controller(ServiceDetailController::class)->prefix('admin/services/details')->name('admin.services.details.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{ser_detail}/edit', 'edit')->name('edit');
    Route::put('/{ser_detail}', 'update')->name('update');
    Route::delete('/{ser_detail}', 'destroy')->name('destroy');
});
// skill route section
Route::controller(SkillController::class)->prefix('admin/skills')->name('admin.skills.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{skill}/edit', 'edit')->name('edit');
    Route::put('/{skill}', 'update')->name('update');
    Route::delete('/{skill}', 'destroy')->name('destroy');
});
// Project section
Route::controller(ProjectController::class)->prefix('admin/project')->name('admin.project.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{project}/edit', 'edit')->name('edit');
    Route::put('/{project}', 'update')->name('update');
    Route::delete('/{project}', 'destroy')->name('destroy');
});

Route::controller(ProjectCategoryController::class)->prefix('admin/project/category/')->name('admin.project.category.')->middleware('auth:admin')->group(function () {
    Route::post('store', 'cat_store')->name('store');
});

// work Process route section
Route::controller(WorkProcessController::class)->prefix('admin/wprocess')->name('admin.wprocess.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{wprocess}/edit', 'edit')->name('edit');
    Route::put('/{wprocess}', 'update')->name('update');
    Route::delete('/{wprocess}', 'destroy')->name('destroy');
});

// Testimonial section
Route::controller(TestimonialController::class)->prefix('admin/testimonial')->name('admin.testimonial.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{testimonial}/edit', 'edit')->name('edit');
    Route::put('/{testimonial}', 'update')->name('update');
    Route::delete('/{testimonial}', 'destroy')->name('destroy');
    Route::put('/unpublish/{testimonial}', 'unpublish')->name('unpublish');
    Route::put('/publish/{testimonial}', 'publish')->name('publish');
});

// About section
Route::controller(AboutController::class)->prefix('admin/about')->name('admin.about.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{about}/edit', 'edit')->name('edit');
    Route::put('/{about}', 'update')->name('update');
    // Route::delete('/{about}', 'destroy')->name('destroy');
});

// Contact section
Route::controller(ContactController::class)->prefix('admin/contact')->name('admin.contact.')->middleware('auth:admin')->group(function () {
    Route::get('', 'index')->name('index');
});

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
