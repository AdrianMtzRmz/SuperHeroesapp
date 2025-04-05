@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $universe->name }}</h1>
        <p><strong>Description:</strong> {{ $universe->description }}</p>

        <h2>Superheroes</h2>
        <ul>
            @foreach ($universe->superheroes as $superhero)
                <li>{{ $superhero->name }}</li>
            @endforeach
        </ul>

        <a href="{{ route('universes.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection