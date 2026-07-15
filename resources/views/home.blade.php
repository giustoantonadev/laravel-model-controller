@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Lista Film</h1>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->original_title }}</h5>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
