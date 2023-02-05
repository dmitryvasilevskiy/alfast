<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ItemStoreRequest extends FormRequest
{
    use Concerns\HasXmlContentType;

    public function authorize()
    {
        $user = User::where('email', $this->getUser())->first();
        if ($user && Hash::check($this->getPassword(), $user->password)) {
            Auth::login($user);
            return true;
        }
        return false;
    }

    public function rules()
    {
        return [
            'name' => ['required']
        ];
    }
}
