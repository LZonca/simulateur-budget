<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SuperAdminPannel extends Component
{

    public $users;
    public $menu = false;
    public $selectedUser_id;
    public function removeAdmin($adminUser_id){
        $adminUser = User::where('id', $adminUser_id)
        ->first();
        $adminUser->assignRole('user');
        $adminUser->removeRole('admin');
        $this->admins;
    }

    public function render()
    {
        return view('livewire.super-admin-pannel');
    }
}
