@extends('layout.master')
@section('title', 'Writer Article Page')

@section('content')
<div class="row g-0 bg-light mt-5 pt-5">
    <div class="container my-4 px-5">
        <div class="row justify-content-left align-items-center p-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset($articles[0]->writer->photo_path) }}" 
                    alt="{{ $articles[0]->writer->name }}" 
                    class="rounded-circle mb-3" 
                    width="180" height="180">
            </div>

            <div class="col-md-6">
                <div class="card border-0 bg-light p-4 shadow-sm rounded-4">
                    <h5 class="fw-bold mb-1">{{ $articles[0]->writer->name }}</h5>
                    <p class="text-secondary mb-0">{{ $articles[0]->writer->bio }}</p>
                </div>
            </div>
        </div>
        <table class="table table-borderless align-middle">
            <tbody>
            @foreach ($articles as $article)
            <tr class="bg-light rounded-3">
                <td class="col-md-4">
                <img src="{{ asset($article->image_path) }}" class="img-fluid rounded-3" alt="{{ $article->title }}">
                </td>
                <td class="col-md-8 px-5">
                <h5 class="fw-bold mb-1">{{ $article->title }}</h5>
                <p class="text-muted mb-1">{{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}</p>
                <p class="text-secondary mb-3">
                    {{ Str::limit($article->content, 150, '...') }}
                </p>
                <a href="{{ route('article_detail', $article->id) }}" class="btn btn-dark rounded-pill px-4">Read more...</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection