@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Works</h1>

            <ul>
              @foreach ($works as $work)
                  <li><strong> {{ $work->title }}</strong> - {{$work->body}}</li>
              @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
