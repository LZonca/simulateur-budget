<form method="POST" action="{{ route('login') }}">
    @csrf

        <div class="relative">
            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Identifiant" />
        </div>

        <div class="relative">
            <x-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Mot de passe" />
        </div>

        <div class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <label for="remember_me" class="text-gray-700">Se rappeler de moi</label>
        </div><br>


        <x-button>
            Connexion
        </x-button>

</form>

    <div class="mt-6 text-center">
        <a href="{{ route('register') }}" class="text-blue-500">Vous n'avez pas encore de compte ?</a>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('password.request') }}"" class="text-sm">Mot de passe oublié ?</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>