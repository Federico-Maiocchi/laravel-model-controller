@extends('layouts.app')


@section('content')
    <div class=" container">
        <div>
            <h1 class="section">Film old but gold</h1>  
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 p-2">
                    <div class="card bg-dark" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title card-t">Title: <span class="text-light">{{ $movie->title }}</span></h5>
                            <h6 class="card-subtitle card-t">Original Title: <span class="text-light">{{ $movie->original_title }}</span></h6>
                            <p class="card-text card-t">country: <span class="text-light">{{ $movie->nationality }}</span></p>
                            <p class="card-text card-t">date: <span class="text-light">{{ $movie->date }}</span></p>
                            <p class="card-text card-t">vote: <span class="text-light">{{ $movie->vote }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


       
