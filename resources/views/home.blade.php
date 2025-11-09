@extends('layout.master')
@section('title', 'Home Page')

@section('content')
<div class="row g-0 bg-light mt-5 pt-5">
    <img src="{{ asset('images/homepage.png') }}" alt="homepage" class="img-fluid">
    <div class="container my-4 px-5">
        <h2 class="fw-bold mb-4 mt-4">Latest Articles</h2>
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