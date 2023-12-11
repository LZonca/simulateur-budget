<form method="POST" action="{{ route('register') }}">
    @csrf

        <div class="flex">
            <div class="w-1/2 pr-4">
                <div class="relative">
                    <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nom" />
                </div>

                <div class="relative">
                    <x-input id="prenom" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" placeholder="Prénom" />
                </div>

                <div class="relative">
                    <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                </div>

                <div class="relative">
                    <x-input id="adresse" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" placeholder="Adresse" />
                </div>

                <div class="relative">
                    <x-input id="codePostal" type="text" name="codePostal" :value="old('codePostal')" required autofocus autocomplete="codePostal" placeholder="Code Postal" />
                </div>
            </div>

            <div class="w-1/2 pl-4">
                <div class="relative">
                    <x-input id="ville" type="text" name="ville" :value="old('ville')" required autofocus autocomplete="ville" placeholder="Ville" />
                </div>

                <div class="relative">
                    <x-input id="pays" type="text" name="pays" :value="old('pays')" required autofocus autocomplete="pays" placeholder="Pays" />
                </div>

                <div class="relative">
                    <x-input id="tel" type="number" name="tel" :value="old('tel')" required autofocus autocomplete="tel" placeholder="Téléphone" />
                </div>

                <div class="relative">
                    <x-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Mot de passe" />
                </div>


                <div class="relative">
                    <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation du mot de passe" />
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-2">
            <div class="flex items-center justify-end mt-2">
                <x-button-register class="ms-4">
                    {{ __('Register') }}
                </x-button-register>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="mt-6 text-center">
                <a href="{{ route('login') }}"  style="white-space: nowrap;" class="text-blue-500">Vous avez déjà un compte ?</a>
            </div>
        </div>
        
</form>