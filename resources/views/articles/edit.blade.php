@extends('layouts.app')

@section('content')
    <h1>Edit Pesanan</h1>
    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Merek Tas</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nomor Hp</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Alamat Pembeli</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $article->author }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection