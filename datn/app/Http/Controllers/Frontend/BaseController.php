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
        $posts = Post::with(['category'])->sortPost()->active()->limit(6)->get();
        $categoriesLimit = $categories->slice(0,5);
        return view('frontend.index', compact (
            'isHome',
            'categories',
            'categoriesLimit',
            'posts',
        ));
    }

    public function search(Request $request)
    {
        $input = $request->all();
        $posts = Post::with(['category'])->sortPost()->active();
        if (isset($input['key_word'])) {
            $posts = $posts->byKeyWord($input['key_word']);
        }
        if (isset($input['category'])) {
            $posts = $posts->byCategory($input['category']);
        }

        $posts = $posts->paginate(9);
        //-- Ajax load page Search list
        if ($request->ajax()) {
            $nextPage = $posts->nextPageUrl();
            if ($posts->currentPage() ==  $posts->lastPage()) {
                $nextPage = 0;
            }
            return [
                'data' => view('frontend.include.post.item_ajax', compact('posts'))->render(),
                'next' => $nextPage
            ];
        }
        return view('frontend.search', compact(
            'posts'
        ));
    }

    public function detail($id)
    {
        $data = Post::with(['reviews'])->find($id);
        if (!$data) {
            return redirect()->route('page.home');
        }
        return view('frontend.detail', compact(
            'data'
        ));
    }

    public function about()
    {
        return view('frontend.about');
    }
}
