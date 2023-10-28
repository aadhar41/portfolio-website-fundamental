@extends('layouts.master')

@section('content')

<!-- About Section -->
<section id="about" class="container text-center">
    <div class="row m-3">
        <a class="btn btn-default" href="{{route('greeting', 'en')}}" role="button">English</a>
        <a class="btn btn-Success" href="{{route('greeting', 'hi')}}" role="button">Hindi</a>
    </div>
    <hr/>
    <h1>{{__('frontend.Welcome to our site.')}}</h1>
    <h2>{{__("frontend.About Me")}}</h2>
    <p>{{__("frontend.intro")}}</p>
</section>

@endsection