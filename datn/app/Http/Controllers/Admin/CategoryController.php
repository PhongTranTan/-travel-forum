<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return redirect()->route('admin.categories.index');
    }

    public function edit($id) 
    {
        $data = Category::find($id);
        return view('admin.categories.create_or_update');
    }

    public function update(Request $rq) 
    {
        $data = Category::find($id);
        $input = $rq->all();
        $data->update($input);
        return redirect()->back();
    }

    public function delete($id) 
    {
        return redirect()->back();
    }
}
