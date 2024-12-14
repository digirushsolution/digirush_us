<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;




Route::get('/', function () {
    return view('welcome');
});
//register routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//login and logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//Password Reset routes
Route::get('password/reset', [CustomPasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomPasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [CustomPasswordResetController::class, 'reset'])->name('password.update');
//Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
//blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('our_project/create', [OurProjectController::class, 'create'])->name('our_project.create');
Route::post('our_project', [OurProjectController::class, 'store'])->name('our_project.store');
Route::get('our_project/{id}/edit', [OurProjectController::class, 'edit'])->name('our_project.edit');
Route::put('our_project/{ourProject}', [OurProjectController::class, 'update'])->name('our_project.update');
Route::delete('our_project/{id}', [OurProjectController::class, 'destroy'])->name('our_project.destroy');
Route::get('our_project', [OurProjectController::class, 'index'])->name('our_project.index');


Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');


Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');



Route::get('/case-study', [SettingController::class,'case_study'])->name('case-study');
Route::get('/setting', [SettingController::class, 'metaPage'])->name('metaPage');
Route::post('/settings/update', [SettingController::class, 'updateSetting'])->name('settings.update');
Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');
});

//front-end
Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/about_us', [UserController::class, 'about_us'])->name('about_us');
Route::get('/digital_marketing', [UserController::class, 'digital_marketing'])->name('digital_marketing');
Route::get('/seo', [UserController::class, 'seo'])->name('seo');
Route::get('/local_seo', [UserController::class, 'local_seo'])->name('local_seo');
Route::get('/ecommerce_seo', [UserController::class, 'ecommerce_seo'])->name('ecommerce_seo');
Route::get('/social_media_marketing', [UserController::class, 'social_media_marketing'])->name('social_media_marketing');
Route::get('/ppc_service', [UserController::class, 'ppc_service'])->name('ppc_service');
Route::get('/content_Management_Marketing', [UserController::class, 'content_management_marketing'] )->name('content_Management_Marketing');
Route::get('/web_service', [UserController::class, 'web_service'] )->name('web_service');
Route::get('/web_development', [UserController::class, 'web_development'] )->name('web_development');
Route::get('/web_design', [UserController::class, 'web_design'])->name('web_design');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
