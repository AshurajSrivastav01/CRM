<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthonticationController;

Route::get('/', function () {
    return view('welcome');
});

# ------------------------------------ UI Routs for Redirection ------------------------------------
// Frontend Routes
Route::view('/', 'frontend.blog', ['Title' => 'Home - Inventory Management']);
Route::view('/about', 'frontend.about', ['Title' => 'About - Inventory Management']);
Route::view('/contact', 'frontend.contact', ['Title' => 'Contact - Inventory Management']);
Route::view('/Categories', 'frontend.categories', ['Title' => 'Categories - Inventory Management']);

// Authontication Routes
Route::view('/cb-user/forgot-password', 'auth.forgotPassword', ['Title' => 'Forgot Password - Inventory Management']);
Route::prefix('user')->group(function () {
    Route::view('/login', 'auth.login', ['Title' => 'User Login - Inventory Management']);
    Route::view('/register', 'auth.register', ['Title' => 'User Register - Inventory Management']);
    Route::view('/reset-password', 'auth.changePassword', ['Title' => 'Reset Password - Inventory Management']);
});

// Admin Routes
Route::view('/dashboard', 'backend.dashboard', ['Title' => 'Dashboard - Inventory Management']);
Route::prefix('dashboard')->group(function () {
    // Post Management
    Route::view('/all-post', 'backend.post.allPost', ['Title' => 'All Post - Inventory Management']);
    Route::view('/add-post', 'backend.post.addPost', ['Title' => 'Add Post - Inventory Management']);
    Route::view('/categories', 'backend.post.categories', ['Title' => 'Categories - Inventory Management']);
    Route::view('/tags', 'backend.post.tags', ['Title' => 'Tags - Inventory Management']);

    // User Management
    Route::view('/all-user', 'backend.user.allUser', ['Title' => 'All User - Inventory Management']);
    Route::view('/add-user', 'backend.user.addUser', ['Title' => 'Add User - Inventory Management']);
    Route::view('/user-roles', 'backend.user.userRoles', ['Title' => 'User Roles - Inventory Management']);

    // Comments Management
    Route::view('/comments', 'backend.comments.comment', ['Title' => 'Comments - Inventory Management']);

    // Profile Management
    Route::view('/profile', 'backend.profile.userProfile', ['Title' => 'User Profile - Inventory Management']);

});

Route::view('/coming-soon', 'backend.comingSoon', ['Title' => 'Comming Soon - Inventory Management']);
Route::view('/not-found', 'backend.404', ['Title' => '404 Not Found - Inventory Management']);

# -------------------------------------------- Backend Routs ------------------------------------------

Route::post('/user/login', [AuthonticationController::class, 'login'], ['Title' => 'User Login - Inventory Management']);
Route::post('/user/register', [AuthonticationController::class, 'register'], ['Title' => 'User Register - Inventory Management']);