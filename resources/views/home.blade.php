@extends('layouts.master')

@section('content')


<!-- Portfolio Section -->
<section id="portfolio" class="container">
    <h2>Portfolio</h2>
    <div class="row">
        <!-- Portfolio Item 1 -->
        <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="https://placehold.co/600x400/png" alt="Project 1">
            <h3>Project 1</h3>
            <p>Description of project 1.</p>
        </div>
        <!-- Portfolio Item 2 -->
        <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="https://placehold.co/600x400/png" alt="Project 2">
            <h3>Project 2</h3>
            <p>Description of project 2.</p>
        </div>
        <!-- Portfolio Item 3 -->
        <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="https://placehold.co/600x400/png" alt="Project 3">
            <h3>Project 3</h3>
            <p>Description of project 3.</p>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="container text-center">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere. Sed at purus nec nulla ullamcorper mattis.</p>
</section>

@endsection