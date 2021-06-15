<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use App\Models\Comment;

class NewsController extends Controller
{

    public function index()
    {
        return view('news.index');
    }

    public function category()
    {
        $categories = Category::orderByDesc('created_at')
                                ->limit(50)->get();

        return view('news.category', [
            'categories' => $categories,
        ]);
    }

    public function content()
    {
        $contents = Content::where('contentStatus', 'published')
                            ->orderByDesc('created_at')
                            ->limit(50)->get();

        return view('news.content', [
            'contents' => $contents,
        ]);
    }

    public function comment()
    {
        $comments = Comment::orderByDesc('created_at')
                            ->limit(50)->get();

        return view('news.comment', [
            'comments' => $comments,
        ]);
    }
}
