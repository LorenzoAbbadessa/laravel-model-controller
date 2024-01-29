@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Genre: {{ $movie->genre }}</p>
                    <p class="card-text">Release Date: {{ $movie->release_date }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection