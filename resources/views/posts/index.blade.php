@extends('layouts.master')

@section('content')


<!-- Posts Section -->
<section id="portfolio" class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Posts</h2>
        <div class="card text-left mb-4">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item mr-2">
                <a class="nav-link active btn-success" href="{{route('posts.create')}}">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-warning active" href="{{route('posts.trashed')}}">Trashed</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h4 class="card-title">All Posts</h4>
            <p class="card-text">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th style="width: 10%;">Image</th>
                            <th style="width: 20%;">Title</th>
                            <th style="width: 30%;">Description</th>
                            <th style="width: 10%;">Category</th>
                            <th style="width: 10%;">Publish Date</th>
                            <th style="width: 20%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td scope="row"><img src="{{asset($post->image)}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="80" width="100" alt="Image"></td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    @if ($post->category)
                                    {{Str::headline($post->category->name)}}
                                    @endif
                                </td>
                                <td>{{date('M d, Y', strtotime($post->created_at))}}</td>
                                <td>
                                  <div class="d-flex">
                                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-success mr-1">Show</a>
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary mr-1">Edit</a>
                                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
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
                    {{ $posts->links() }}
            </p>
          </div>
        </div>
      </div>
  </div>
</section>

@endsection