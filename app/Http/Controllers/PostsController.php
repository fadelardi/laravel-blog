<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
      $posts = Posts::get();
      return view('posts', compact('posts'));
    }

    public function show($post)
    {
      $post = Posts::find($post);
      return view('post', compact('post'));
    }
}
