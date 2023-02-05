<?php

namespace App\Providers;

use App\Models\Item;
use App\Policies\ItemPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Item::class => ItemPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
