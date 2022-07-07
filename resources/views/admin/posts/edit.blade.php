@extends('layouts.dashboard')

@section('content')
    <h1>Modifica post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name='title' value="{{ old('title') ? old('title') : $post->title }}">
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">nessuna</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category &&  old('category_id', $post->category->id) == $category->id ? 'selected' : ''}}> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea type="text" class="form-control" id="content" name='content' rows='10'>{{ old('content') ? old('content') : $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection