<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Session;
use Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::orderBy('created_at', 'desc')->get();
        return view('backend.Tag.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.Tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan tag bernama <b>$tag->nama_tag</b>!"
        ]);
        return redirect()->route('Tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('backend.Tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrfail($id);
        return view('backend.Tag.edit', compact('tag'));
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
            'nama_tag' => 'required',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah tag menjadi <b>$tag->nama_tag</b>!"
        ]);
        return redirect()->route('Tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id)->delete();
        return redirect()->route('Tag.index');
    }
}
