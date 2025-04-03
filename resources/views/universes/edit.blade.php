<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit universe</title>
</head>
<body>
<h1>Edit Universe</h1>
<form action="{{ route('universes.update', $universe->id) }}" method="post">
    @csrf
    @method('patch')

    <label for="Name">Name</label>
    <input type="text" name="name" value="{{ $universe->name }}">

    <br><br>

    <label for="Description">Description</label>
    <input type="text" name="description" value="{{$universe->description}}">

    <br><br>

    <input type="submit" value="Edit">
</form>
</body>
</html>
