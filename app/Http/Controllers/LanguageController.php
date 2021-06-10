<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        
        return view('languages.index', [
            'languages' => $languages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('languages.create');
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
            'languageName' => 'required',
            'languageAppearance' => 'required',
            'languageImage' => '',
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = Language::find($id);

        return view('languages.show', [
            'language' => $language
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
        $language = Language::find($id);

        return view('languages.edit', [
            'language' => $language
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
            'languageName' => 'required',
            'languageAppearance' => 'required',
            'languageImage' => '',
        ]);

        $language = Language::find($id);

        $imageFile = $request->file('languageImage');
        $destinationPath = 'public/img/';
        $originalFile = $imageFile->getClientOriginalName();
        $imageFile->move($destinationPath, $originalFile);

        $language->update([
            'languageName' => $request->input('languageName'), 
            'languageAppearance' => $request->input('languageAppearance'),
            'languageImage' => $originalFile, 
        ]);

        return redirect('/languages/' . $id)->with('success', 'Language has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::find($id);
        $language->delete();

        return redirect('/languages');
    }
}
