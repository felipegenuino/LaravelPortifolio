<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

      public function index()
      {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
      }

      public function show()
      {
        return view('posts.show');
      }

      public function create()
      {
        return view('posts.create');
      }

      public function store()
      {
        Post::create(request(['title', 'body']));
        return redirect('/');
        // return view('posts.store');
      }
}
