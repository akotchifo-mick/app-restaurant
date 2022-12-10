<?php

namespace Database\Factories;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [            
            'meal'      => $this->faker->randomElement(['Breakfast', 'Lunch', 'Dinner']),
            'date'      => $this->faker->dateTimeBetween('2022-12-01', 'now'),
            'orders'    => rand(1,5),
        ];
    }
}
