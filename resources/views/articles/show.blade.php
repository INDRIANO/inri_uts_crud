@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>Alamat pembeli{{ $article->author }}</p>
    @if ($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid mb-3">
    @endif
    <div>
        {!! nl2br(e($article->content)) !!}
    </div>
    <div class="mt-3">
        <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
        </form>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
