<?php

namespace App\Http\Controllers\Authencation;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    //
    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required | min:5 | max:50',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->save();

    }
}
