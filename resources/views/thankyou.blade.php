@extends('layouts.app')
@section('content')

    <div class="container marketing">
    <div class="jumbotron text-xs-center">
        <h1 class="display-3">Thank You {{$name}}!</h1>

        <hr>
        <p>
            Having trouble? <a href="">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
        </p>
    </div>
    </div>



@endsection
