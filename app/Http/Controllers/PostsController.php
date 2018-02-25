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

        //dd(request()->all());

        //create a new post using the request data
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');

        //salvando no banco de dados
        $post->save();

        // redirecionando

        return redirect('/');



        return view('posts.store');
      }
}
