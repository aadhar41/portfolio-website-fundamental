@extends('layouts.master')

@section('content')


<!-- Portfolio Section -->
<section id="portfolio" class="container">
    <h2>Portfolio</h2>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ $error }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endforeach
    @else
        
    @endif
    <div class="container">
        <div class="row">
            {{-- <img src="{{ asset('/storage/images/chatting-1.jpg') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="No-Image"> --}}
            <div class="row">
                @foreach ($posts as $post)
                {{-- <x-post.index :post="$post" /> --}}
                <x-post.index>
                    <x-slot name="title" >
                        {{$post->title}}
                    </x-slot>
                    <x-slot name="image" >
                        {{$post->image}}
                    </x-slot>
                    <x-slot name="description" >
                        {{$post->description}}
                    </x-slot>
                    <x-slot name="category" >
                        {{$post->category->name}}
                    </x-slot>
                </x-post.index>
                @endforeach
            </div>
            <div class="card p-5">
                <form action="{{route('upload-file')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" >
                            <label class="custom-file-label" for="image">Choose Image...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>

                {{-- @foreach ($users as $user)
                            <div class="mb-5 col-sm">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://placehold.co/600x400" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text"> {{ $user->email }} </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">@if($user->address) {{ $user->address->address }} @endif</li>
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
                    {{-- @foreach ($posts as $post)
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
                    @endforeach --}}
                    
            </div>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="container text-center">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere. Sed at purus nec nulla ullamcorper mattis.</p>
</section>

@endsection