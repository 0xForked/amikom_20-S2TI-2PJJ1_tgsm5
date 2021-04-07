<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ExampleUserFactory
{

    public static function data(): array
    {
        $faker = Faker::create('id_ID');

        return [
            'unique_id' => Str::uuid(),
            'name' => $faker->name,
            'username' => $faker->userName,
            'password' => Hash::make('secret'),
        ];
    }
}
