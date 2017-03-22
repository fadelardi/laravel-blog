<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
      return Posts::get();
    }

    public function show($post)
    {
      return Posts::find($post);
    }
}
