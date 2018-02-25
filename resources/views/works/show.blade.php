@extends('layouts.app')

@section('content')

 <div class="container">

   <div class="row">
     <div class="col-md-12">
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/works">Works</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $work->title }}</li>
  </ol>
</nav>


     </div>
   </div>
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $work->title }}</h1>
            <p class="lead"> {{$work->body}}</p>
        </div>
    </div>
</div>
@endsection
