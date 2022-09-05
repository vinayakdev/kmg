<?php

namespace App\Http\Controllers;

use Auth;
use Cache;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function home()
    {
        $user = User::latest()->get();
        dd($user);
        return view("home");
    }
    public function search()
    {
        $userss = User::all();

        return view("search", ['userss' => $userss]);
    }
    public function profile()
    {
        return view("profile");
    }

    public function userprofile($id)
    {
        $user = User::findOrFail($id);
        return view("profile", compact('user'));
    }
}
