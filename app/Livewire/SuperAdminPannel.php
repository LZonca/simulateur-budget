<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SuperAdminPannel extends Component
{

    public $users;
    
    public function removeAdmin($user_id){
        $user = User::where('id', $user_id)
        ->first();
        $user->removeRole('admin');
    }

    public function setAdmin($user_id){
        $user = User::where('id', $user_id)
        ->first();
        $user->assignRole('admin');
    }

    public function deleteUser($user_id){
        $user = User::where('id', $user_id)
        ->first();
        $user->delete();
    }

    public function render()
        {
            return view('livewire.super-admin-pannel');
        }
}
