<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
     public function index()
    {
        $posts=BlogPost::all();
        return view('welcome_view', ['posts'=>$posts]);
    }

}
