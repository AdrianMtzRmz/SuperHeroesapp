<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit gender</title>
</head>
<body>
<h1>Edit gender</h1>

<form action="{{route('genders.update', $gender->id)}}" method="POST">
    @csrf
    @method('patch')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{$gender->name}}">

    <br>

    <button type="submit" value="Edit">Edit</button>
</form>
</body>
</html>
