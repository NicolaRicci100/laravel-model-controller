@extends('layouts.main')
@section('main')
    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 justify-content-center">
        @foreach ($movies as $movie)
            <div class="card col m-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Original Title: <strong>{{ $movie->original_title }}</strong></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Country: <strong>{{ $movie->nationality }}</strong></li>
                    <li class="list-group-item">Release date: <strong>{{ $movie->date }}</strong></li>
                    <li class="list-group-item">Critics: <strong>{{ $movie->vote }}</strong></li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
