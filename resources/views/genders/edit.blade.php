@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Gender</h1>
        <form action="{{ route('genders.update', $gender->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $gender->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection