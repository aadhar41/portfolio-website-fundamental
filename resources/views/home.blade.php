@extends('layouts.master')

@section('content')


<!-- Portfolio Section -->
<section id="portfolio" class="container">
    <h2>Portfolio</h2>
    <div class="container">
        <div class="row">
            {{-- @foreach ($users as $user)
            <div class="mb-5 col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text"> {{ $user->email }} </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">@if($user->address) {{ $user->address->address }}  @endif</li>
                    </ul>
                </div>
            </div>
            @endforeach --}}
            {{-- @foreach ($addresses as $address)
            <div class="mb-5 col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@if($address->user) {{ $address->user->name }} @endif</h5>
                        <p class="card-text">{{ $address->address }}</p>
                    </div>
                </div>
            </div>
            @endforeach --}}
            @foreach ($posts as $post)
            <div class="mb-5 col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@if($post->title) {{ $post->title }} @endif</h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($post->tags as $tag)
                        <li class="list-group-item">{{ ($tag->name) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="container text-center">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere. Sed at purus nec nulla ullamcorper mattis.</p>
</section>

@endsection