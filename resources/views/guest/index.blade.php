@extends('layouts.app')


@section('content')
    <div class="container">
        <div>
            <h1>Film old but gold</h1>  
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title: {{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Original Title: {{ $movie->original_title }}</h6>
                            <p class="card-text">country: {{ $movie->nationality }}</p>
                            <p class="card-text">date: {{ $movie->date }}</p>
                            <p class="card-text">vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


       
