<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# ------------------------------------ UI Routs for Redirection ------------------------------------
// Frontend Routes
Route::view('/', 'frontend.blog', ['Title' => 'Home - Modern Blog']);
Route::view('/about', 'frontend.about', ['Title' => 'About - Modern Blog']);
Route::view('/contact', 'frontend.contact', ['Title' => 'Contact - Modern Blog']);
Route::view('/Categories', 'frontend.categories', ['Title' => 'Categories - Modern Blog']);

// Authontication Routes
Route::view('/cb-user/login', 'auth.login', ['Title' => 'User Login - Modern Blog']);
Route::view('/cb-user/forgot-password', 'auth.forgotPassword', ['Title' => 'Forgot Password - Modern Blog']);
Route::prefix('user')->group(function () {
    Route::view('/register', 'auth.register', ['Title' => 'User Register - Modern Blog']);
    Route::view('/reset-password', 'auth.changePassword', ['Title' => 'Reset Password - Modern Blog']);
});

// Admin Routes
Route::view('/dashboard', 'backend.dashboard', ['Title' => 'Dashboard - Modern Blog']);
Route::prefix('dashboard')->group(function () {
    // Post Management
    Route::view('/all-post', 'backend.post.allPost', ['Title' => 'All Post - Modern Blog']);
    Route::view('/add-post', 'backend.post.addPost', ['Title' => 'Add Post - Modern Blog']);
    Route::view('/categories', 'backend.post.categories', ['Title' => 'Categories - Modern Blog']);
    Route::view('/tags', 'backend.post.tags', ['Title' => 'Tags - Modern Blog']);

    // User Management
    Route::view('/all-user', 'backend.user.allUser', ['Title' => 'All User - Modern Blog']);
    Route::view('/add-user', 'backend.user.addUser', ['Title' => 'Add User - Modern Blog']);
    Route::view('/user-roles', 'backend.user.userRoles', ['Title' => 'User Roles - Modern Blog']);

    // Comments Management
    Route::view('/comments', 'backend.comments.comment', ['Title' => 'Comments - Modern Blog']);

    // Profile Management
    Route::view('/profile', 'backend.profile.userProfile', ['Title' => 'User Profile - Modern Blog']);

});

Route::view('/coming-soon', 'backend.comingSoon', ['Title' => 'Comming Soon - Modern Blog']);
Route::view('/not-found', 'backend.404', ['Title' => '404 Not Found - Modern Blog']);

# -------------------------------------------- Backend Routs ------------------------------------------