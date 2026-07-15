@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Movies</h1>

    <div class="row g-4">
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm">

                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->original_title }}</h5>

                        <p class="card-text text-muted mb-1">
                            <strong>Nationality:</strong> {{ $movie->nationality }}
                        </p>

                        <p class="card-text text-muted mb-1">
                            <strong>Date:</strong> {{ $movie->date }}
                        </p>

                        <p class="card-text text-muted">
                            <strong>Vote:</strong> {{ $movie->vote }}
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="btn btn-primary w-100">
                            Details
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
