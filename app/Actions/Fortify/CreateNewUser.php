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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            "name" => ["required", "string", "max:25"],
            "lname" => ["required", "string", "max:25"],
            "email" => [
                "required",
                "string",
                "email",
                "max:255",
                "unique:users",
            ],
            "password" => $this->passwordRules(),
            "terms" => Jetstream::hasTermsAndPrivacyPolicyFeature()
                ? ["accepted", "required"]
                : "",
            "dob" => ["required", "date", "before:-21 years"],
            "religion" => ["required"],
            "gender" => ["required"],
        ])->validate();

        return User::create([
            "name" => $input["name"],
            "status" => "Unverified",
            "lname" => $input["lname"],
            "email" => $input["email"],
            "password" => Hash::make($input["password"]),
            "dob" => $input["dob"],
            "religion" => $input["religion"],
            "gender" => $input["gender"],
        ]);
    }
}
