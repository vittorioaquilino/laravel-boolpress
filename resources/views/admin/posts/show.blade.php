@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <small>{{ $post->slug }}</small>
    <p>{{ $post->content }}</p>
@endsection