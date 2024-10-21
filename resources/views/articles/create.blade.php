@extends('layouts.app')

@section('content')
    <h1>Tambahkan Tas </h1>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Merek Tas</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nomor Hp</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">alamat Pembeli</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Checkout</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
