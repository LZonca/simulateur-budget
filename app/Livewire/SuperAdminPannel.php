<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SuperAdminPannel extends Component
{

    public $admins;
    public $menu = false;
    public $selectedUser_id;
    public function removeAdmin($adminUser_id){
        $adminUser = User::where('id', $adminUser_id)
        ->first();
        $adminUser->delete();
    }

    public function toggleMenu($user_id){
        if (!$this->menu || $this->selectedUser_id !== $user_id) {
            $this->menu = true;
            $this->selectedUser_id = $user_id;
        } else {
            $this->menu = false;
        }
    }
    public function render()
    {
        return view('livewire.super-admin-pannel');
    }
}
