<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Language;
use App\Models\Category;
use App\Models\Content;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    /**
     * Display a listing of the languages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();

        return view('index', [
            'languages' => $languages,
        ]);
    }

    /**
     * Display a listing of the categories.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function language($id)
    {
        $categories = Category::where('languageId', '=', $id)
                        ->get();

        $language = Language::find($id);

        return view('language', [
            'categories' => $categories,
            'language' => $language,
        ]);
    }

    /**
     * Display a listing of the contents.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $contents = DB::table('contents')
                        ->where('categoryId', '=', $id)
                        ->get();

        $category = Category::find($id);

        $languageId = Category::where('categoryId', '=', $id)
                                ->value('languageId');

        return view('category', [
            'contents' => $contents,
            'languageId' => $languageId,
            'category' => $category,
        ]);
    }

    /**
     * Display a listing of the contents.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function content($id)
    {
        $content = Content::find($id); 

        $comments = Comment::where('contentId', '=', $id)
                            ->get();

        return view('content', [
            'content' => $content,
            'comments' => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        //
    }
}
