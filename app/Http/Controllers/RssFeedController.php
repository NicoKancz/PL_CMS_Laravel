<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class RssFeedController extends Controller
{
    public function feed()
    {
        $contents = Content::where('status', 'published')
                            ->orderByDesc('created_at')
                            ->limit(50)->get();
        
        return view('rss.feed', [
            'contents' => $contents,
        ])->header('Content-Type', 'application/xml');
    }
}
