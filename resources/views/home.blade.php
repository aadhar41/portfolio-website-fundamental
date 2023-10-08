@extends('layouts.master')

@section('content')


<!-- Portfolio Section -->
<section id="portfolio" class="container">
    <h2>Portfolio</h2>
    <div class="row">
        @foreach ($projects as $project)
            @if ($project['status'] == 1)
                <!-- Portfolio Item -->
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}">
                    <h3>{{ $project['name'] }}</h3>
                    <p>{{ $project['description'] }}</p>
                </div>
            @else
                <!-- Portfolio Item -->
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}">
                    <h3>{{ $project['name'] }}</h3>
                    <p>{{ $project['description'] }}</p>
                    <p><button class="btn btn-warning" disabled="disabled">Pending...</button></p>
                </div>
            @endif
        @endforeach
    </div>
</section>


<!-- About Section -->
<section id="about" class="container text-center">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere. Sed at purus nec nulla ullamcorper mattis.</p>
</section>

@endsection