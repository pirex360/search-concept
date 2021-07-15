<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ContactFactory extends Factory
{


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
