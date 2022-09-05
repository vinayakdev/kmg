<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Profile;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Smprofile extends Component
{
    use WithPagination;

    public $perPage = 9;
    public $nextCursor; // holds our current page position.
    public $ordAge = 'dob';
    public $order;
    protected $users; // user list
    public $ra; //generate random value
    public $agemodel = ''; // set age limits
    public $name; // name
    public $marital_statuscontroller, $religioncontroller, $marital_status_model = '', $religion_model = '';

    public function loadMore()
    {
        sleep(1.5);
        $this->perpage = 0;
        $this->perPage += 9;
    }

    public function boot()
    {

        $this->users = User::join('profiles', 'profiles.user_id', 'users.id')->where('gender', '!=', Auth::user()->gender);
    }
    public function mount()
    {
        $this->ra = rand(10, 100); // store random only once
    }
    public function resetFilters()
    {
        $this->reset('name', 'agemodel', 'marital_status_model', 'religion_model');
        // $this->agemodel = '2029';
        $this->resetPage();
    }
    public function render()
    {
        $this->marital_statuscontroller = Profile::select('marital_status')->whereNotNull('marital_status')->distinct()->get();
        $this->religioncontroller = User::select('religion')->whereNotNull('religion')->distinct()->get();

        // ordering based on user request
        switch ($this->order) {
            case "name-asc":
                $this->users = $this->users->orderBy("users.name", "asc");
                break;
            case "name-desc":
                $this->users = $this->users->orderBy("users.name", "desc");
                break;
            case "age-desc":
                $this->users = $this->users->orderBy("dob", "desc");
                break;
            case "age-asc":
                $this->users = $this->users->orderBy("dob", "asc");
                break;
            default:
                $this->users = $this->users->inRandomOrder($this->ra);
                break;
        }

        // age limits
        if ($this->agemodel == '') {
            $from = '20';
            $to = '80';
        } elseif ($this->agemodel == 2029) {
            $from = '20';
            $to = '29';
        } elseif ($this->agemodel == 3039) {
            $from = '30';
            $to = '39';
        } elseif ($this->agemodel == 4049) {
            $from = '40';
            $to = '49';
        } elseif ($this->agemodel == 50) {
            $from = '50';
            $to = '80';
        }
        $this->users = $this->users->whereBetween(User::raw('TIMESTAMPDIFF(YEAR,dob,CURDATE())'), array($from, $to));

        // sort as user request
        $this->users = $this->users->where(function ($q) {
            $q->Where('religion', 'like', "%{$this->religion_model}%")->where('marital_status', 'like', "%{$this->marital_status_model}%");
        });

        // search by name User::join('profiles', 'profiles.user_id', 'users.id')
        $this->users = $this->users->where(function ($q) {
            $q->orWhere('users.name', 'like', "%{$this->name}%")
                ->orWhere('lname', 'like', "%{$this->name}%");
        });




        return view('livewire.smprofile', ['userss' => $this->users->paginate($this->perPage)]);
    }
}
