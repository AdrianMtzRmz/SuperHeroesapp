@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Genders</h1>
        <a href="{{ route('genders.create') }}" class="btn btn-primary">Create New Gender</a>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($genders as $gender)
                <tr>
                    <td>{{ $gender->id }}</td>
                    <td>{{ $gender->name }}</td>
                    <td>
                        <a href="{{ route('genders.show', $gender->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('genders.edit', $gender->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('genders.destroy', $gender->id) }}" method="POST" class="d-inline">
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