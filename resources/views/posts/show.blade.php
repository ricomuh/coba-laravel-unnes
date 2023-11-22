@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->created_at->format('d M Y') }}</p>

    <p>{{ $post->body }}</p>

@endsection
