@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
        </div>





            @foreach ($posts as $post)
            <div class="col-md-6 _card-columns">
            <div class="card card-outline-primary mb-3 ">
                   <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                   <div class="card-body">
                     <h3 class="card-title">{{ $post->title }}</h3>
                    <!-- <p class="card-text">{{$post->body}}</p> -->
                     <a href="/posts/{{ $post->id }}" class="btn  btn-primary">Leia mais</a>
                   </div>
                   <div class="card-footer text-muted">{{$post->created_at->toFormattedDateString()}}</div>
                 </div>
                   </div>
              @endforeach







    </div>
</div>
@endsection
