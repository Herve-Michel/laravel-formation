{{-- resources/views/auth/register.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    @if ($errors->has('name'))
    <span>{{ $errors->first('name') }}</span>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Nom</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <div>
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">S'inscrire</button>
        </div>
    </form>
</body>

</html>