<?php

namespace App\Http\Controllers;


use Cache;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function home()
    {
        $users = User::latest()->where('gender', '!=', Auth::user()->gender)->take(5)->get();

        return view("home", compact('users'));
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
