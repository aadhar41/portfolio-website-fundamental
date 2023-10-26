@extends('layouts.master')

@section('content')


<!-- Posts Section -->
<section id="portfolio" class="container">
    <h2>Trashed Posts</h2>
    <div class="container">
        <div class="row">
            <div class="card text-center mb-4">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item mr-2">
                            <a class="nav-link active btn-default" href="{{route('posts.index')}}">All Posts</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="nav-link active btn-success" href="{{route('posts.create')}}">Create</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Trashed Posts</h4>
                    <p class="card-text">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Publish Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td scope="row"><img src="{{asset($post->image)}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="80" width="100" alt="Image"></td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>@if ($post->category)
                                    {{Str::headline($post->category->name)}}
                                    @endif</td>
                                <td>{{date('M d, Y', strtotime($post->created_at))}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('posts.restore', $post->id)}}" class="btn btn-success btn-sm mr-1">Restore</a>
                                        <form action="{{route('posts.forceDelete', $post->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection