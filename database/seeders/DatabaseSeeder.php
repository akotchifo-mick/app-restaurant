<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Ticket::factory(50)->create();
    }
}
