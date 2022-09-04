<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Filepond extends Component
{
    use WithFileUploads;
    public function updateProfile()
    {
        # code...
    }
    public function render()
    {
        return view('livewire.filepond');
    }
}
