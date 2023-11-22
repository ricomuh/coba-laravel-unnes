@extends('layouts.app')

@section('title', 'About')

@section('content')

    <h1>About</h1>

    {{-- image --}}
    <img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

    <p>
        Hello! My name is {{ $name }}.
        I'm {{ $age }} years old.
    </p>

    <p>
        You can contact me via email at <a href="mailto:{{ $email }}">{{ $email }}</a>.
    </p>

@endsection
