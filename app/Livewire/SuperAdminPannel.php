<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SuperAdminPannel extends Component
{

    public $users;
    public function removeAdmin($adminUser_id){
        
    }

    public function render()
    {
        return view('livewire.super-admin-pannel');
    }
}
