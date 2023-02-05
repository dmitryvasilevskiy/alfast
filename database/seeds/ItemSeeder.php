<?php

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\User;
class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::query()->create(['name' => 'test', 'user_id' => User::first()->id]);
    }
}
