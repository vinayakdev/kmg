<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Profile extends Component
{
    public $user;
    public $value;

    public $zodiac = "";

    public $male = 0;
    public $female = 0;
    public function render()
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


        $this->value = beliefmedia_zodiac($birthdate);

        return view('livewire.profile');
    }

    public function update()
    {
        dd('bitch');
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
}
