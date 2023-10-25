@extends('layouts.master')

@section('content')


<!-- Create Post Section -->
<section id="portfolio" class="container">
    <div class="container">
        <h2>Create Post</h2>
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Holy guacamole!</strong> {{$error}}.
                        </div>
                    @endforeach
                @endif
                <div class="card text-left mb-4">
                  <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                      <li class="nav-item mr-2">
                        <a class="nav-link active btn-success" href="{{route('posts.index')}}">All Posts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn-warning active" href="{{route('posts.trashed')}}">Trashed</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">All Posts</h4>
                    <p class="card-text">
                        <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="">Title</label>
                              <input type="text" name="title" id="title" class="form-control" placeholder="Post Title" aria-describedby="helpId" value="{{ old('title', $post->title) }}">
                              <small id="helpId" class="text-muted">Enter Post Title</small>
                            </div>
                            <div class="form-group">
                              <label for="category">Category</label>
                              <select class="form-control" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ (old("category_id", $post->category_id) == $category->id ? "selected":"") }} >{{Str::headline($category->name)}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea class="form-control" name="description" id="description" placeholder="Post Description" rows="3">{{ old('description', $post->description) }}</textarea>
                            </div>
                            <div class="form-group">
                              <label for=""></label>
                              <input type="file" class="form-control-file" name="image" id="image" placeholder="image" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Select Image to update for Post</small>
                              <img src="{{asset($post->image)}}" height="80" width="100" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Image">
                            </div>
                            <hr/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection