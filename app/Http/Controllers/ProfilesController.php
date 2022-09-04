<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function search()
    // {
    //     $users = User::all()->except(Auth::id())->where('gender', '!=', auth()->user()->gender);
    //     $userss = User::where('id', '!=', auth()->user()->id, 'and', 'gender', '!=', auth()->user()->gender)->simplePaginate(9);
    //     return view('dashboard/search', ['userss' => $userss]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        function beliefmedia_zodiac($birthdate)
        {
            $zodiac = "";

            list($year, $month, $day) = explode("-", $birthdate);

            if (($month == 3 && $day > 21) || ($month == 4 && $day < 19)) {
                $zodiac = "Aries";
            } elseif (
                ($month == 4 && $day > 20) ||
                ($month == 5 && $day < 20)
            ) {
                $zodiac = "Taurus";
            } elseif (
                ($month == 5 && $day > 20) ||
                ($month == 6 && $day < 20)
            ) {
                $zodiac = "Gemini";
            } elseif (
                ($month == 6 && $day > 20) ||
                ($month == 7 && $day < 22)
            ) {
                $zodiac = "Cancer";
            } elseif (
                ($month == 7 && $day > 23) ||
                ($month == 8 && $day < 22)
            ) {
                $zodiac = "Leo";
            } elseif (
                ($month == 8 && $day > 23) ||
                ($month == 9 && $day < 22)
            ) {
                $zodiac = "Virgo";
            } elseif (
                ($month == 9 && $day > 23) ||
                ($month == 10 && $day < 22)
            ) {
                $zodiac = "Libra";
            } elseif (
                ($month == 10 && $day > 23) ||
                ($month == 11 && $day < 21)
            ) {
                $zodiac = "Scorpio";
            } elseif (
                ($month == 11 && $day > 22) ||
                ($month == 12 && $day < 21)
            ) {
                $zodiac = "Sagittarius";
            } elseif (
                ($month == 12 && $day > 22) ||
                ($month == 1 && $day < 19)
            ) {
                $zodiac = "Capricorn";
            } elseif (
                ($month == 1 && $day > 20) ||
                ($month == 2 && $day < 18)
            ) {
                $zodiac = "Aquarius";
            } elseif (
                ($month == 2 && $day > 19) ||
                ($month == 3 && $day < 20)
            ) {
                $zodiac = "Pisces";
            }

            return $zodiac;
        }

        $birthdate = $user->dob;

        $value = beliefmedia_zodiac($birthdate);

        return view("auth.personal", ["value" => $value]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        $data = request()->validate([
            "phone" => ["required", "numeric", "phone"],
            "pincode" => ["required"],
            "area" => ["required"],
            "district" => ["required"],
            "city" => ["required"],
            "caste" => ["required"],
            "star" => ["required"],
        ]);
        auth()
            ->user()
            ->profile->update($data);
        return redirect("/about");
    }
    public function user($userid)
    {
        $user = User::findOrFail($userid);
        return view("userprofile", ["user" => $user]);
    }

    public function aboutcreate()
    {
        return view("auth.about");
    }

    public function aboutstore(User $user)
    {
        $data = request()->validate([
            "description" => ["required", "string", "max:500"],
            "job" => ["required", "string"],
            "education" => ["required", "string"],
            "hobbies" => ["required", "string"],
            "height" => ["required", "numeric", "max:3"],
            "weight" => ["required", "numeric",],
            "marital_status" => ["required"],
            "foodpreference" => ["required"],
        ]);
        auth()
            ->user()
            ->profile->update($data);
        return redirect("/filepupload");
    }

    public function filepuploadcreate()
    {
        return view("fileupload");
    }
    public function filepuploadstore(User $user)
    {
        $data = request()->validate([
            "profile_photo_path" => ["required"],
        ]);
        Auth::user()->update($data);
        return redirect("/profile");
    }
}
