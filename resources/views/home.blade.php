@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-white">Best Movies</h1>

    <div class="row g-4">
        @foreach ($movies as $movie)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="movie-card h-100">

                {{-- Poster + overlay + play --}}
                <div class="poster-wrapper">

                    {{-- Poster TMDB --}}
                    <img
                        src="{{ $movie->image }}"
                        class="poster-img"
                        alt="{{ $movie->original_title }}">

                    {{-- Overlay blu Prime Video --}}
                    <div class="poster-overlay"></div>

                    {{-- Icona Play --}}
                    <div class="play-icon">
                        ▶
                    </div>

                    {{-- Badge voto --}}
                    <div class="rating-badge">
                        ⭐ {{ $movie->vote }}
                    </div>

                </div>

                {{-- Info --}}
                <div class="movie-info p-3">
                    <h5 class="text-white mb-1">{{ $movie->original_title }}</h5>
                    <p class="text-secondary mb-1">{{ $movie->nationality }}</p>
                    <p class="text-secondary mb-1">{{ $movie->date }}</p>
                </div>

            </div>

        </div>

        @endforeach
    </div>
</div>
@endsection