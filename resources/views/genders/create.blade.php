@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Create Gender</h1>
        <form action="{{ route('genders.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection