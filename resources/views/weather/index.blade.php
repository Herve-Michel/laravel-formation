<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>La météo de {{ $weather['city']['name'] }} est : </p>
    <div>
        @foreach($weather['forecast'] as $day)
        <p>Le {{ $day["datetime"] }} : {{ $day["tmin"] }}°C - {{ $day["tmax"] }}°C</p>
        @endforeach
    </div>


</body>

</html>