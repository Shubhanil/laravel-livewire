<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        // $data = [
        //     'name'=>'Shubhanil',
        //     'email'=>'email id',
        // ];
        return view('livewire.profile');
    }
}
