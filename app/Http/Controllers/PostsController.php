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

    public function create()
    {
      return view('create');
    }

    public function store()
    {
      Posts::create([
          'title' => request('title'),
          'body' => request('body')
      ]);

      return redirect('/');
    }
}
