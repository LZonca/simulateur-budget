<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'adresse' => ['required', 'string', 'max:255'],
            'codePostal' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'max:50', 'regex:/^(\+|00)?[0-9]{1,3}[0-9]{8,}$/'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'prenom' => $input['prenom'],
            'email' => $input['email'],
            'adresse' => $input['adresse'],
            'codePostal' => $input['codePostal'],
            'ville' => $input['ville'],
            'pays' => $input['pays'],
            'tel' => $input['tel'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
