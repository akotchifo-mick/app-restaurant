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
        $user_id = User::where('role', 'student')
                       ->get()
                       ->pluck('id');
        return [
            'user_id'   => $this->faker->randomElement($user_id),
            'meal'      => $this->faker->randomElement(['Breakfast', 'Lunch', 'Dinner']),
            'date'      => $this->faker->date(),
            //'orders'    => $this->faker->rand(1,5),

        ];
    }
}
