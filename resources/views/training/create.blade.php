<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Create Training
    </h1>
    <form action="{{route('training.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="length">length</label>
        <input type="number" name="length" id="length">
        <br>
        <label for="max_people">max_people</label>
        <input type="number" name="max_people" id="max_people">
        <br>
        <label for="type">type</label>
        <input type="radio" name="type" id="type" value="adulte">Adulte</radio>
        <input type="radio" name="type" id="type" value="enfant">Enfant</radio>
        <br>
        <button type="submit">Save</button>
</body>

</html>