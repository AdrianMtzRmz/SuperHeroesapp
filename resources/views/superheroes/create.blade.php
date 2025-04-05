@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Create Superhero</h1>
        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="real_name" class="form-label">Real Name</label>
                <input type="text" name="real_name" id="real_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="universe_id" class="form-label">Universe</label>
                <select name="universe_id" id="universe_id" class="form-select" required>
                    @foreach ($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="gender_id" class="form-label">Gender</label>
                <select name="gender_id" id="gender_id" class="form-select" required>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Picture URL</label>
                <input type="text" name="picture" id="picture" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection