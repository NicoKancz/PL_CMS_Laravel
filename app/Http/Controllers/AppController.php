<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function languageCreate()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function languageStore(Request $request)
    {
        $request->validate([
            'languageName' => 'required|max:55',
            'languageAppearance' => 'required|numeric|digits:4',
            'languageImage' => 'nullable|file|max:255',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $imageFile = $request->file('languageImage');
        $destinationPath = 'public/img/';
        $originalFile = $imageFile->getClientOriginalName();
        $imageFile->move($destinationPath, $originalFile);

        Language::insert([
            'languageName' => $request->input('languageName'),
            'languageAppearance' => $request->input('languageAppearance'),
            'languageImage' => $originalFile,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect('/languages')->with('success', 'Language has been added');
    }

    /**
     * Display a listing of the categories.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function categories($id)
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryCreate($id)
    {
        $language = Language::find($id);

        return view('categories.appCreate', [
            'language' => $language,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function categoryStore(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required|max:55',
            'categoryDesc' => 'required',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        Category::insert([
            'categoryName' => $request->input('categoryName'), 
            'categoryDesc' => $request->input('categoryDesc'),
            'languageId' => $id,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect('/appCategories/' . $id)->with('success', 'Category has been added');
    }

    /**
     * Display a listing of the contents.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function contents($id)
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentCreate($id)
    {
        $category = Category::find($id);

        return view('contents.appCreate', [
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function contentStore(Request $request, $id)
    {
        $request->validate([
            'contentTitle' => 'required|max:255',
            'contentDesc' => 'required',
            'contentStatus' => 'required|max:55',
            'contentImage' => 'nullable|file|max:255',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        Content::insert([
            'contentTitle' => $request->input('contentTitle'), 
            'contentDesc' => $request->input('contentDesc'),
            'contentStatus' => $request->input('contentStatus'),
            'contentImage' => $request->input('contentImage'),
            'categoryId' => $id,
            'userId' => Auth::user()->userId,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect('/appContents/' . $id)->with('success', 'Content has been added');
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
