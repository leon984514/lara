<?php

namespace App\Http\Livewire\Loans\Sub;

use Livewire\Component;

class Business extends Component
{

    public $active = false;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = false;
    }

    public function render()
    {
        return view('livewire.loans.sub.business');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
