@extends('layouts.app')


@section('content')
    <div class="container">
        <div>
            <h1>questa è la Home Page</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia veniam eveniet eum.</p>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div>
                        <h2>{{ $movie->title }}</h2>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
@endsection


       
