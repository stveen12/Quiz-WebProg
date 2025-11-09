@extends('layout.master')
@section('title', 'Our Writers')

@section('content')
<div class="container text-center mt-5 p-5">
    <h2 class="fw-bold m-5">Our Writers:</h2>
    <div class="row justify-content-center g-4">

        @foreach ($writers as $writer)
        <div class="col-md-4 col-sm-6">
                <a href="{{ route('writer_articles', $writer->id) }}" class="text-decoration-none text-dark">
                <div class="card border-0 bg-light p-4 shadow-sm rounded-4">
                    <img src="{{ asset($writer->photo_path) }}" 
                         alt="{{ $writer->name }}" 
                         class="rounded-circle mx-auto d-block mb-3" 
                         width="180" height="180">
                    <h5 class="fw-bold mb-1">{{ $writer->name }}</h5>
                    <p class="text-secondary mb-0">{{ $writer->bio }}</p>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
