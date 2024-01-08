{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <h1>Page d'Accueil</h1>

    @auth
    <p>Bienvenue, {{ Auth::user()->name }}!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
    @else
    <p>Veuillez vous <a href="{{ route('login') }}">connecter</a>.</p>
    @endauth
</body>

</html>