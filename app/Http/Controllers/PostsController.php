<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
      $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

      return view('posts', compact('posts'));
    }

    public function show($post)
    {
      $post = Post::find($post);
      return view('post', compact('post'));
    }

    public function create()
    {
      return view('create');
    }

    public function store()
    {
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      Post::create([
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id()
      ]);

      return redirect('/');
    }
}
