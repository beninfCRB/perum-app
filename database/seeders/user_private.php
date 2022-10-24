<?php

namespace Database\Seeders;

use App\Models\User_private as User;
use Illuminate\Database\Seeder;

class user_private extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'username'=>'a',
                'username'=>'a',
                'password'=>bcrypt('a'),
                'role'=>'admin'
            ],
            [
                'name'=>'Admin',
                'username'=>'manager',
                'username'=>'a',
                'password'=>bcrypt('a'),
                'role'=>'manager'
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
