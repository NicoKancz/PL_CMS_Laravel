<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Language;
use App\Models\Category;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function language()
    {
        $categories = DB::table('categories')
                        ->join('languages', 'categoryId', '=', 'categoryId')
                        ->get();

        return view('language', [
            'categories' => $categories,
        ]);
    }

    /**
     * Display a listing of the contents.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $categories = DB::table('contents')
                        ->join('categories', 'contentId', '=', 'contentId')
                        ->join('users', 'contentId', '=', 'contentId')
                        ->get();

        return view('language', [
            'categories' => $categories,
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
