<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Welcome to Game Blog 🎮";
    }

    public function show($slug)
    {
        return "Post : " . $slug;
    }
}