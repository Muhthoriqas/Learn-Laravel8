<?php

namespace App\Http\Controllers;

use App\Models\Users;

class UserController extends Controller
{
    public function viewUser()
    {
        $user = Users::all();
        // dd($user);
        return view('userList', ['userList' => $user]);
    }
}