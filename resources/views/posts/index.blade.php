@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h1>Posts</h1>

        <div class="row gap-4 w-100">

        @foreach ($posts as $post)
            <div class="card col-md-3">
            <div class="card-header">
              {{ $post->created_at->format('d M Y') }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ str($post->content)->words(20, '...') }}</p>
              <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        @endforeach
        </div>

@endsection
