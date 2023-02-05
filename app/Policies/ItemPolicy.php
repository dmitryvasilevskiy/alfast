<?php

namespace App\Policies;

use App\Models\Item;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function create(User $user, Item $item)
    {
        dd($item);
    }
}
