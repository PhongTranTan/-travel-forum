<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        $isHome = 1;
        return view('frontend.index', compact (
            'isHome'
        ));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function search(Request $request)
    {
        $ip = $request->all();
        return view('frontend.search');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function forgot()
    {
        return view('frontend.forgot');
    }

    public function detail()
    {
        return view('frontend.detail');
    }
}
