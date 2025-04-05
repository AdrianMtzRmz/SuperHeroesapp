@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Superheroes</h1>
        <a href="{{ route('superheroes.create') }}" class="btn btn-primary">Create New Superhero</a>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Universe</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($superheroes as $superhero)
                <tr>
                    <td>{{ $superhero->id }}</td>
                    <td>{{ $superhero->name }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->universe->name }}</td>
                    <td>{{ $superhero->gender->name }}</td>
                    <td>
                        <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection