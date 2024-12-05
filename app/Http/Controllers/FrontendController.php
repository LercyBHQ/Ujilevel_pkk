<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function rosan()
    {
        return view('rosan');
    }
    public function about()
    {
        return view('about');
    }
    public function product()
    {
        return view('product');
    }
    public function kontak()
    {
        return view('post.kontak');
    }
    public function index()
    {
        return view('produk.index');
    }
}