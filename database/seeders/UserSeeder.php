<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=> 'Nicolas Luna',
            'email'=>'leonard_dave_nick@hotmail.com',
            'password'=> bcrypt('david32843.')
        ]);
        User::factory(99)->create();
    }
}
