@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-white">Best Movies</h1>

    <div class="row g-4">
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="movie-card h-100">

                    {{-- Poster TMDB --}}
                    <div class="poster-wrapper">
                        <img 
                            src="{{ $movie->image }}" 
                            class="poster-img"
                            alt="{{ $movie->original_title }}"
                        >
                    </div>

                    {{-- Info --}}
                    <div class="movie-info p-3">
                        <h5 class="text-white mb-1">{{ $movie->original_title }}</h5>
                        <p class="text-secondary mb-1">{{ $movie->nationality }}</p>
                        <p class="text-secondary mb-1">{{ $movie->date }}</p>
                        <p class="text-warning fw-bold">⭐ {{ $movie->vote }}</p>
                    </div>

                </div>

            </div>
        @endforeach
    </div>
</div>
@endsection
