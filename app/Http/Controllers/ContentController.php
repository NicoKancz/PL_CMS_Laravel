<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Content;
use App\Models\Category;
use App\Models\User;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();

        return view('contents.index', [
            'contents' => $contents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('contents.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'contentTitle' => 'required|max:255',
            'contentDesc' => 'required',
            'contentStatus' => 'required|max:55',
            'contentImage' => 'nullable|file|max:255',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $categoryId = Category::where('categoryName', $request->categoryName)
                                ->value('categoryId');

        Content::insert([
            'contentTitle' => $request->input('contentTitle'), 
            'contentDesc' => $request->input('contentDesc'),
            'contentStatus' => $request->input('contentStatus'),
            'contentImage' => $request->input('contentImage'),
            'categoryId' => $categoryId,
            'userId' => Auth::user()->userId,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        return redirect('/contents')->with('success', 'Content has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);

        return view('contents.show', [
            'content' => $content
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id);
        $categories = Category::all();

        return view('contents.edit', [
            'content' => $content,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'contentTitle' => 'required|max:255',
            'contentDesc' => 'required',
            'contentStatus' => 'required|max:55',
            'contentImage' => 'nullable|file|max:255',
        ]);

        $content = Content::find($id);
        $categoryId = Category::where('categoryName', $request->categoryName)
                                ->value('categoryId');

        $content->update([
            'contentTitle' => $request->input('contentTitle'), 
            'contentDesc' => $request->input('contentDesc'),
            'contentStatus' => $request->input('contentStatus'),
            'contentImage' => $request->input('contentImage'),
            'categoryId' => $categoryId,
        ]);

        return redirect('/contents')->with('success', 'Content has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();

        return redirect('/contents');
    }
}
