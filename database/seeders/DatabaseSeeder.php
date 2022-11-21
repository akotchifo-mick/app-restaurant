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
         /*User::factory(3)->create([
            'role'      => 'admin',
         ]);
         User::factory(50)->create([
            'role'      => 'student',
         ]);
         User::factory(10)->create([
            'role'      => 'waiter',
         ]);*/

         $users = User::where('role', 'student')->get();
         $admins= User::where('role', 'admin')->get();
         $admin_id = []; $user_id = [];

        foreach($admins as $adm)    
            array_push($admin_id, $adm->id);
        foreach($users as $use)    
            array_push($user_id, $use->id);
        
        //$dates = ['2022-11-01','2022-11-02','2022-11-03','2022-11-04','2022-11-05','2022-11-06','2022-11-07'];
        $meals = ['Breakfast', 'Lunch', 'Dinner'];

        /*foreach($dates as $date){
            $indice = rand(0, 2);
            Ticket::factory()->create([
                'user_id'   => $admin_id[$indice],
                'number'    => 0,
                'date'      => $date,
            ]);

            $number = 1;
            foreach($meals as $meal){
                foreach($user_id as $use){
                    Ticket::factory(1)->create([
                        'user_id'   => $use,
                        'number'    => $number++,
                        'date'      => $date,
                        'meal'      => $meal,
                    ]);
                }
            }
        }*/
        /*$date = date('Y-m-d');
        $indice = rand(0, 2);
        Ticket::factory()->create([
            'user_id'   => $admin_id[$indice],
            'number'    => 0,
            'date'      => $date,
        ]);

        $number = 1;
        foreach($meals as $meal){
            foreach($user_id as $use){
                Ticket::factory(1)->create([
                    'user_id'   => $use,
                    'number'    => $number++,
                    'date'      => $date,
                    'meal'      => $meal,
                ]);
            }
        }*/

        

    }
}
