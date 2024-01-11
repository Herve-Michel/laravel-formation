<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('weather.cities') }}" method="POST">
        @csrf
        <input type="text" name="city" placeholder="Entrez une ville">
        <button type="submit">Rechercher</button>
    </form>
</body>

</html>