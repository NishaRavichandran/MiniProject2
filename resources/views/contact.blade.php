@extends('layouts.app')

@section('content')
    <div class="container marketing">
    <div style="background-color: #dae0e5; padding-left:70px; padding-right:70px; padding-top: 70px; padding-bottom: 70px">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form for Feedback and Queries.</p></div>
        <div class="=card-body">
            {{--<form action="/contact" method="POST">--}}
            {{ csrf_field() }}
            <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" class="form-control" id="name" rows="1">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send As Message</button>
            </form>
        </div>
    </div>
    </div>
@endsection
