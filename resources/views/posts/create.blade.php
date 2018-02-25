@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-12">
    <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
         <li class="breadcrumb-item active" aria-current="page">new</li>
       </ol>
     </nav>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <h1>Create a post</h1>


            <form method="POST" action="/posts">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="" name="title">
              </div>

              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Create New</button>

            </form>

        </div>
    </div>
</div>
@endsection
