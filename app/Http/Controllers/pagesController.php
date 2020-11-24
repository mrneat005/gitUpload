<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }


    public function services()
    {
        return view('pages.Services');
    }

    
    public function posts()
    {
        return view('pages.posts');
    }

    
    public function about()
    {
        return view('pages.about');
    }
}
