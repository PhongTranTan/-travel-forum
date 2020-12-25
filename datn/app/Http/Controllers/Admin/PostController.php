<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact(
            'posts'
        ));
    }

    public function create() 
    {
        return 1;
    }

    public function store() 
    {
        return 1;
    }

    public function edit() 
    {
        return 1;
    }

    public function update() 
    {
        return 1;
    }

    public function delete() 
    {
        return 1;
    }
}
