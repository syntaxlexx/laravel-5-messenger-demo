<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'lexx',
                'password' => bcrypt('lexx'),
                'email' => 'lexxyungcarter@gmail.com',
            ],
            [
                'name' => 'acelords',
                'password' => bcrypt('acelords'),
                'email' => 'acelords.space@gmail.com',
            ],
        ];

        foreach($users as $user)
        {
            \App\User::updateOrCreate(['name' => $user['name']], $user);
        }
    }
}
