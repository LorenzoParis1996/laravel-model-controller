@extends('layouts.app')


@section('main-content')

<h1 class="white-text">Someone's favourite movies</h1>

<div class="container">

    @foreach ($movies as $movie)
    <div class="card " style="width: 18rem;">
        <div class="card-body">
          <h3 class="white-text">Title: {{ $movie['title']}}</h3>
          <h4 class="white-text">Original title: {{ $movie['original_title']}}</h4>
          <p class="white-text">Nationality: {{ $movie['nationality']}}</p>
          <p class="white-text">Release date: {{ $movie['date']}}</p>
          <p class="white-text">Vote: {{ $movie['vote']}}</p>

        </div>
      </div>

    @endforeach
</div>


@endsection

