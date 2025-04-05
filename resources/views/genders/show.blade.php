@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $gender->name }}</h1>
        <p><strong>ID:</strong> {{ $gender->id }}</p>

        <h2>Superheroes</h2>
        <ul>
            @foreach ($gender->superheroes as $superhero)
                <li>{{ $superhero->name }}</li>
            @endforeach
        </ul>

        <a href="{{ route('genders.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection