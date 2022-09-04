<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Welcome extends Component
{
    public $male = 0;
    public $female = 0;

    public function render()
    {
        $this->male = User::where("gender", "=", "male")->count();
        $this->female = User::where("gender", "=", "female")->count();

        return view("livewire.welcome");
    }
}
