<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class FetchMoviePosters extends Command
{
    protected $signature = 'movies:fetch-posters';
    protected $description = 'Fetch posters from TMDB and update movies table';

    public function handle()
    {
        $apiKey = env('TMDB_API_KEY');

        $movies = Movie::all();

        foreach ($movies as $movie) {

            $response = Http::get("https://api.themoviedb.org/3/search/movie", [
                'api_key' => $apiKey,
                'query' => $movie->original_title,
            ]);

            $results = $response->json()['results'] ?? [];

            if (count($results)) {
                $posterPath = $results[0]['poster_path'] ?? null;

                if ($posterPath) {
                    $movie->image = "https://image.tmdb.org/t/p/w500" . $posterPath;
                    $movie->save();

                    $this->info("Poster trovato per: {$movie->original_title}");
                }
            } else {
                $this->warn("Nessun poster trovato per: {$movie->original_title}");
            }
        }

        return Command::SUCCESS;
    }
}
