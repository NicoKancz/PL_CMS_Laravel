<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Language;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();

        return view('categories.create', [
            'languages' => $languages,
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
            'categoryName' => 'required|max:55',
            'categoryDesc' => 'required',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $languageId = Language::where('languageName', $request->languageName)
                            ->value('languageId');

        Category::insert([
            'categoryName' => $request->input('categoryName'), 
            'categoryDesc' => $request->input('categoryDesc'),
            'languageId' => $languageId,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect('/categories')->with('success', 'Category has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('categories.show', [
            'category' => $category
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
        $category = Category::find($id);
        $languages = Language::all();

        return view('categories.edit', [
            'category' => $category,
            'languages' => $languages,
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
            'categoryName' => 'required|max:55',
            'categoryDesc' => 'required'
        ]);

        $category = Category::find($id);
        $languageId = Language::where('languageName', $request->languageName)
                                ->value('languageId');

        $category->update([
            'categoryName' => $request->input('categoryName'), 
            'categoryDesc' => $request->input('categoryDesc'), 
            'languageId' => $languageId, 
        ]);

        return redirect('/categories')->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories');
    }
}
