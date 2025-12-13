<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Language Switcher
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'bn'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// ============================================
// FRONTEND ROUTES (Public)
// ============================================
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/sustainability', [FrontendController::class, 'sustainability'])->name('sustainability');
Route::get('/ethical-sourcing', [FrontendController::class, 'ethicalSourcing'])->name('ethical-sourcing');
Route::get('/manufacturing-excellence', [FrontendController::class, 'manufacturingExcellence'])->name('manufacturing-excellence');

// About Page (single page with sections)
Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/category/{slug?}', [FrontendController::class, 'category'])->name('category');

// ============================================
// ADMIN ROUTES (Protected)
// ============================================
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // User Management Routes
    Route::resource('users', UserController::class);
    Route::post('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');
    Route::post('/users/{user}/approve', [UserController::class, 'approve'])->name('users.approve');
    Route::post('/users/{user}/reject', [UserController::class, 'reject'])->name('users.reject');

    // Role Management Routes
    Route::resource('roles', RoleController::class);

    // Product Category Management Routes
    Route::resource('product-categories', ProductCategoryController::class);
    Route::post('/product-categories/{productCategory}/toggle-status', [ProductCategoryController::class, 'toggleStatus'])->name('product-categories.toggle-status');

    // Product Management Routes
    Route::resource('products', ProductController::class);
    Route::post('/products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])->name('products.toggle-status');

    // About Sections Management
    Route::resource('about-sections', \App\Http\Controllers\Admin\AboutSectionController::class);
    Route::post('/about-sections/{aboutSection}/toggle-status', [\App\Http\Controllers\Admin\AboutSectionController::class, 'toggleStatus'])->name('about-sections.toggle-status');
    
    // Offices Management
    Route::resource('offices', \App\Http\Controllers\Admin\OfficeController::class);
    Route::post('/offices/{office}/toggle-status', [\App\Http\Controllers\Admin\OfficeController::class, 'toggleStatus'])->name('offices.toggle-status');
    
    // Services (Flip Cards) Management
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::post('/services/{service}/toggle-status', [\App\Http\Controllers\Admin\ServiceController::class, 'toggleStatus'])->name('services.toggle-status');

    // Values Management
    Route::resource('values', \App\Http\Controllers\Admin\ValueController::class);
    Route::post('/values/{value}/toggle-status', [\App\Http\Controllers\Admin\ValueController::class, 'toggleStatus'])->name('values.toggle-status');
});
