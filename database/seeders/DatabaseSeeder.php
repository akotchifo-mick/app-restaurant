<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create([
            'role'      => 'admin',
         ]);
        User::factory(10)->create([
            'role'      => 'student',
         ]);
        User::factory(3)->create([
            'role'      => 'waiter',
         ]);      

    }
}
