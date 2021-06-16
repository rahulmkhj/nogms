<?php

use Illuminate\Support\Facades\Route;
use NOGMS\Auth\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'showSignInForm'] )
    ->name('signin.form');
