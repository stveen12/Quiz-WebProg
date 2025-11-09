@extends('layout.master')
@section('title', 'Article Page')

@section('content')
<div class="row g-0 bg-light mt-5 pt-5">
    <div class="container my-4 px-5">
        <h2 class="fw-bold mb-4 mt-4">{{ $article->title }}</h2>
        <div class="container mb-4 text-center">
            <img src="{{ asset($article->image_path) }}" class="img-fluid rounded-3 mb-4" alt="{{ $article->title }}">
        </div>
        <p class="text-primary mb-1">{{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}</p>
        <p class="text-secondary mb-3">
            {{ $article->content }}
        </p>
    </div>
</div>

@endsection