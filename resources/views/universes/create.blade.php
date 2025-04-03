<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create universe</title>
</head>
<body>
    <h1>Create Universe</h1>
    <form action="{{ route('universes.store') }}" method="post">
        @csrf

        <label for="Name">Name</label>
        <input type="text" name="name">

        <br><br>

        <label for="Description">Description</label>
        <input type="text" name="description">

        <br><br>

        <input type="submit" value="Create Universe">
    </form>
</body>
</html>
