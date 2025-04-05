@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Universes</h1>
        <a href="{{ route('universes.create') }}" class="btn btn-primary">Create New Universe</a>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($universes as $universe)
                <tr>
                    <td>{{ $universe->id }}</td>
                    <td>{{ $universe->name }}</td>
                    <td>{{ $universe->description }}</td>
                    <td>
                        <a href="{{ route('universes.show', $universe->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('universes.edit', $universe->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" class="d-inline">
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