<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class BaseController extends Controller
{
    public function index()
    {
        $isHome = 1;
        $categories = Category::active()->get();
        $categoriesLimit = $categories->slice(0,5);
        return view('frontend.index', compact (
            'isHome',
            'categories',
            'categoriesLimit'
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

    public function detail()
    {
        return view('frontend.detail');
    }
}
