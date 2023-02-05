<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(['email' => 'test@test.loc'], [
            'name' => 'test',
            'password' => '11235811'
        ]);
    }
}
