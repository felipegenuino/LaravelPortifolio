@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>About page</h1>
            <p class="lead">My name is <?php echo $name; ?></p>
            <p><?php echo $about ?></p>
            <p>Have <?php echo $age ?> old age</p>

            <h4>Coisas que preciso fazer</h4>
            <ul>
              @foreach ($tasks as $task)
                  <li> {{ $task }}</li>
              @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
