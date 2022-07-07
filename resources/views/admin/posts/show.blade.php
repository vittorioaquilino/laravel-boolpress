@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <small>{{ $post->slug }}</small>
    <p>{{ $post->content }}</p>
    <p>Categoria: {{ $category ? $category->name : 'nessuna categoria' }}</p>
    <div class="d-flex">
        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
        <form action="{{ route('admin.posts.destroy', [ 'post' => $post->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>
    </div>
@endsection