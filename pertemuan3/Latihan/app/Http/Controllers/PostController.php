<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman posts";
    }

    public function show()
    {
        return "Ini adalah halaman single post";
    }
}
