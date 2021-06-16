<?php


namespace NOGMS\Auth\Http\Controllers;


use NOGMS\Base\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showSignInForm()
    {
        return view('AuthViews::signin-form');
    }

}
