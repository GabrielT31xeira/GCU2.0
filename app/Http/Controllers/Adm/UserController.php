<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = new User();
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;

        $user->save();
        return redirect()->back();
    }
}
