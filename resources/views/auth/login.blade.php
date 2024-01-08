{{-- resources/views/auth/login.blade.php --}}

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required autofocus />
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div>
        <button type="submit">Connexion</button>
    </div>
</form>