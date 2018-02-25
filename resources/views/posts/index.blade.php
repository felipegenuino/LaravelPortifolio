@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>

            <ul>
              @foreach ($posts as $post)
                  <li>
                    <a href="/posts/{{ $post->id }}"><strong> {{ $post->title }}</strong> - {{$post->body}}</a>
                  </li>
              @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
