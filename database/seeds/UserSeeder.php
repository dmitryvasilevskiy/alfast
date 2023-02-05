<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(['email' => 'test@test.loc'], [
            'name' => 'test',
            'password' => Hash::make('11235811')
        ]);
    }
}
