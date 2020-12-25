<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function profile()
    {
        return view('frontend.profile');
    }

    public function postProfile()
    {
        return view('frontend.profile');
    }

    public function postSignup()
    {
        $isMainPage = 1;
        return view('frontend.signup', compact(
            'isMainPage'
        ));
    }

    public function signup()
    {
        $isMainPage = 1;
        return view('frontend.signup', compact(
            'isMainPage'
        ));
    }

    public function forgot()
    {
        $isMainPage = 1;
        return view('frontend.forgot', compact(
            'isMainPage'
        ));
    }

    public function postForgot()
    {
        $isMainPage = 1;
        return view('frontend.forgot', compact(
            'isMainPage'
        ));
    }

    public function postReview()
    {
        return 1;
    }
}
