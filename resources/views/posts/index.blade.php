@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
        </div>




        <div class="card-columns">
          @foreach ($posts as $post)
                  <div class="card">
                   <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                   <div class="card-body">
                     <h5 class="card-title">{{ $post->title }}</h5>
                     <!-- <p class="card-text">{{$post->body}}</p> -->
                     <a href="/posts/{{ $post->id }}" class="btn  btn-primary">Leia mais</a>
                   </div>
                 </div>
              @endforeach

        </div>





    </div>
</div>
@endsection
