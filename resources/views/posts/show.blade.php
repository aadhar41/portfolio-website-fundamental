@extends('layouts.master')

@section('content')


<!-- Posts Section -->
<section id="portfolio" class="container">
    <h2>Posts</h2>
   
    <div class="container">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item mr-2">
                          <a class="nav-link active btn-default" href="{{route('posts.index')}}">All Posts</a>
                        </li>
                        <li class="nav-item mr-2">
                          <a class="nav-link active btn-success" href="{{route('posts.create')}}">Create</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link btn-warning active" href="{{route('posts.trashed')}}">Trashed</a>
                        </li>
                      </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <img src="{{asset($post->image)}}" height="180" width="200" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <p class="card-text">{{$post->description}}</p>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </div>
    </div>
</section>

@endsection