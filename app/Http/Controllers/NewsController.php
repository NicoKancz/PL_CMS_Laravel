<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class NewsController extends Controller
{
    public function index()
    {
        $contents = Content::where('contentStatus', 'published')
                            ->orderByDesc('created_at')
                            ->limit(50)->get();

        return view('news.index', [
            'contents' => $contents,
        ]);
    }
}
