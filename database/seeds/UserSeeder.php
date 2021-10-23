<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Smith',
                'fname' => 'Maria',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Maria@email.com',
                'password' => bcrypt('Maria')
            ],
            [
                'id' => 2,
                'lname' => 'Kitty',
                'fname' => 'lynn',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'lynn@email.com',
                'password' => bcrypt('ynn')
            ],
            [
                'id' => 3,
                'lname' => 'Sebecu',
                'fname' => 'Keneth',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Keneth@email.com',
                'password' => bcrypt('Keneth')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
