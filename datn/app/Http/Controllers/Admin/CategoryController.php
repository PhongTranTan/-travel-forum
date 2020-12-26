<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact(
            'categories'
        ));
    }

    public function create() 
    {
        return view('admin.categories.create_or_update');
    }

    public function store(Request $rq) 
    {
        $input = $rq->all();
        $input = $this->parseInput($input, $rq);
        Category::create($input);
        return redirect()->route('admin.category.index');
    }

    public function edit($id) 
    {
        $data = Category::find($id);
        return view('admin.categories.create_or_update', compact(
            'data'
        ));
    }

    public function update(Request $rq, $id) 
    {
        $data = Category::find($id);
        $input = $rq->all();
        $input = $this->parseInput($input, $rq);
        $data->update($input);
        return redirect()->back();
    }

    public function delete($id) 
    {
        $data = Category::find($id);
        $data->delete(); 
        return redirect()->back();
    }

    public function parseInput($input, $rq)
    {
        if( $rq->file('image') ) {
            $type = $rq->file('image')->extension();
            $timeNow = strtotime("now");
            $folder = "public/images/category/";
            $nameFile = "image_{$timeNow}.{$type}";
            Storage::putFileAs("{$folder}", $rq->file('image'), $nameFile);
            $path = "/images/category/$nameFile";
            $input['image'] = $path;
        }
        if (!isset($input['active'])) {
            $input['active'] = 0;
        } else {
            $input['active'] = 1;
        }
        return $input;
    }
}
