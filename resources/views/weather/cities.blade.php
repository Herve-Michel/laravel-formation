<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Choisissez une ville dans la liste</h1>

    <ul>
        @foreach($cities['cities'] as $city)
        <li>
            <a href="{{ route('weather.show', ['city' => $city['insee']]) }}">{{ $city["name"] }}</a>
        </li>
        @endforeach

</body>

</html>