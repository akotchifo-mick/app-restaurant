<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'lastName'  => $this->faker->lastName(),
            'firstName' => $this->faker->firstName(),
            'cardId'    => $this->faker->unique()->randomNumber(8),
            'email'     => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->dateTimeBetween('2022-11-01', '2022-11-30'),
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //'role'      => $this->faker->randomElement(['admin', 'student', 'waiter']),   
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
