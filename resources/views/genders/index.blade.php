<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gender</title>
</head>
<body>
<h1>Gender</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($genders as $gender)
        <tr>
            <td>{{ $gender->id }}</td>
            <td>{{ $gender->name }}</td>
            <td>
                <a href="{{route('genders.show', $gender->id)}}">Show</a>
                <a href="{{route('genders.edit', $gender->id)}}">Edit</a>

                <form action="{{route('genders.destroy', $gender->id)}}" method="post">
                @csrf
                @method('delete')

                <input type="submit" value="Delete" onclick="return confirm('Are you pretty sure? There is no way back')">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br>
<a href="{{route('genders.create')}}">Create new gender</a>
</body>
</html>
