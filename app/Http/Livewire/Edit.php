<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request;

class Edit extends Component
{
    public $dman = '23';
    public $phone, $area, $pincode, $city, $district, $height, $weight, $marital_status, $foodpreference, $caste;
    public $modalFormVisible = false, $tab = 1;


    public function boot()
    {
        $this->phone = Auth::user()->profile->phone;
        $this->area = Auth::user()->profile->area;
        $this->pincode = Auth::user()->profile->pincode;
        $this->city = Auth::user()->profile->city;
        $this->district = Auth::user()->profile->district;
        $this->height = Auth::user()->profile->height;
        $this->weight = Auth::user()->profile->weight;
        $this->desc = Auth::user()->profile->description;
        $this->marital_status = Auth::user()->profile->marital_status;
        $this->hobbies = Auth::user()->profile->hobbies;
        $this->caste = Auth::user()->profile->caste;
        $this->foodpreference = Auth::user()->profile->foodpreference;

        $this->job = Auth::user()->profile->job;
        $this->education = Auth::user()->profile->education;

        $this->modalFormVisible = false;
    }

    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }


    public function save()
    {
        Auth::user()->profile->update([
            'phone' => $this->phone,
            'area' => $this->area,
            'pincode' => $this->pincode,
            'city' => $this->city,
            'district' => $this->district,
            'weight' => $this->weight,
            'height' => $this->height,
            'description' => $this->desc,
            'hobbies' => $this->hobbies,
            'marital_status' => $this->marital_status,
            'job' => $this->job,
            'caste' => $this->caste,
            'education' => $this->education,
            'foodpreference' => $this->foodpreference,
        ]);

        return redirect()->to('/profile');
    }

    public function render()
    {

        return view('livewire.edit');
    }
}
