<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->sortPost()->get();
        return view('admin.posts.index', compact(
            'posts'
        ));
    }

    public function create() 
    {
        $categories = Category::active()->get();
        return view('admin.posts.create_or_update', compact(
            'categories'
        ));
    }

    public function store(Request $rq) 
    {  
        $input = $rq->all();
        $input = $this->parseInput($input, $rq);
        $checkCreate = Post::create($input);
        if (!$checkCreate) {
            session()->flash('error', 'Create Fail !');
        }
        session()->flash('success', 'Create Success !');
        return redirect()->route('admin.post.index');
    }

    public function edit($id) 
    {
        $categories = Category::active()->get();
        $data = Post::find($id);
        return view('admin.posts.create_or_update', compact(
            'categories',
            'data'
        ));
    }

    public function update(Request $rq, $id) 
    {
        $data = Post::find($id);
        $input = $rq->all();
        $input = $this->parseInput($input, $rq);
        $checkUpdate = $data->update($input);
        if (!$checkUpdate) {
            session()->flash('error', 'Update Fail !');
        }
        session()->flash('success', 'Update Success !');
        return redirect()->back();
    }

    public function delete($id) 
    {
        $data = Post::find($id);
        $checkDelete = $data->delete();
        if (!$checkDelete) {
            session()->flash('error', 'Delete Fail !');
        }
        session()->flash('success', 'Delete Success !');
        return redirect()->back();
    }

    public function parseInput($input, $rq)
    {
        if( $rq->file('image') ) {
            $type = $rq->file('image')->extension();
            $timeNow = strtotime("now");
            $folder = "public/images/posts/";
            $nameFile = "image_{$timeNow}.{$type}";
            Storage::putFileAs("{$folder}", $rq->file('image'), $nameFile);
            $path = "/images/posts/$nameFile";
            $input['image'] = $path;
        }
        if (!isset($input['active'])) {
            $input['active'] = 0;
        } else {
            $input['active'] = 1;
        }
        return $input;
    }

    public function clonePost($number)
    {
        if (!isset($number)) {
            return "Truyền tham số clone vào admin-vt/posts/clone-post/{number}";
        }
        $data = Post::first();
        for ($i = 0; $i <= $number; $i++) {
            $new = $data->replicate();
            $new->push();
        }
        session()->flash('success', "Clone {$number} post Success !");
        return redirect()->route('admin.post.index');
    }
}
