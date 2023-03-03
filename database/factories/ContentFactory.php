<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastname,
            'firstname' => $this->faker->firstname,
            'gender' => $this->faker->randomElement(['男性', '女性']),
            //'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building_name' => $this->faker->secondaryAddress,
            'opinion' => $this->faker->text

        ];
    }
}
