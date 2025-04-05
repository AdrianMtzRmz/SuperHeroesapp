@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $superhero->name }}</h1>
        <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
        <p><strong>Universe:</strong> {{ $superhero->universe->name }}</p>
        <p><strong>Gender:</strong> {{ $superhero->gender->name }}</p>
        @if ($superhero->picture)
            <p><strong>Picture:</strong></p>
            <img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" class="img-fluid">
        @endif

        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection