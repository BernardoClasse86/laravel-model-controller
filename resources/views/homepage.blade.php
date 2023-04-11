@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="title">movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="card">
            <h2 class="text movie-title">{{$movie->title}}</h2>
            <h3 class="text movie-og-title">{{$movie->original_title}}</h3>
            <p class="text movie-details">Exit date: {{$movie->date}}</p>
            <p class="text movie-details">Nationality: {{$movie->nationality}}</p>
            <p class="text movie-details">Vote: {{$movie->vote}}</p>
        </div>
        @endforeach
    </div>
</div>
    
@endsection