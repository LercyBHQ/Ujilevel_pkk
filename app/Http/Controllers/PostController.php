<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
            return view('post.kontak', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.   
     */
    public function create()
    {
        return view('post.kontak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:150',
            'body' => 'required',
            ]);
            $input = $request->all();
            $Post = Post::create($input);
            return back()->with('success',' Post baru berhasil
            dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit', [
        'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post ->title = $request->title;
        $post ->body = $request->body;
        $post ->save();
            return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return back()->with('success',' Post berhasil dihapus.');
    }
}
