<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universes table</title>
</head>
<body>
<h1>Universes</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>
    @foreach($universes as $universe)
        <tr>
            <td>{{ $universe->id }}</td>
            <td>{{ $universe->name }}</td>
            <td>{{ $universe->description}}</td>
            <td>
                <a href="{{route('universes.show', $universe->id)}}">Show</a>
                <a href="{{route('universes.edit', $universe->id)}}">Edit</a>

                <form action="{{route('universes.destroy', $universe->id)}}" method="post">
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
<a href="{{ route('universes.create') }}">Create New Universe</a>
</body>
</html>
