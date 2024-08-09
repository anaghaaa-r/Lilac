<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    // list
    public function list(Request $request)
    {

        $users = User::with('department', 'designation')->latest()->get();

        return view('home', [
            'users' => $users
        ]);
    }
}
