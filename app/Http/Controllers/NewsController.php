<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class NewsController extends Controller
{

    public function index()
    {
        return view('news.index');
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
}
