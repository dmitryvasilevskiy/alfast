<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ItemStoreRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function store(ItemStoreRequest $request)
    {
        try {
            return Item::query()->create(['name' => $request->all()['name'], 'user_id' => Auth::id()]);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 500);
        }
    }
}
