<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

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
            'contents' => $contents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create');
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
            'contentName' => 'required',
            'contentDesc' => '',
            'contentType' => 'required',
            'contentImage' => '',
        ]);

        Content::insert([
            'contentName' => $request->input('contentName'), 
            'contentDesc' => $request->input('contentDesc'),
            'contentType' => $request->input('contentType'),
            'contentImage' => $request->input('contentImage'),
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

        return view('contents.edit', [
            'content' => $content
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
            'contentName' => 'required',
            'contentDesc' => '',
            'contentType' => 'required',
            'contentImage' => '',
        ]);

        $content = Content::find($id);

        $content->update([
            'contentName' => $request->input('contentName'), 
            'contentDesc' => $request->input('contentDesc'),
            'contentType' => $request->input('contentType'),
            'contentImage' => $request->input('contentImage'),
        ]);

        return redirect('/contents/' . $id)->with('success', 'Content has been updated');
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
