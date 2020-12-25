<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        $categoriesCount = Category::all()->count();
        $postsCount = Post::all()->count();
        $customersCount = Customer::all()->count();
        return view('admin.dashboard.index', compact(
            'categoriesCount',
            'postsCount',
            'customersCount'
        ));
    }
}
