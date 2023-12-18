<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Privilege;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function simulateur(){
        return view('simulateur');
    }

    public function resultats(){
        return view('resultats');
    }

    public function pannel(){
        return view('pannel');
    }

    public function superAdminPannel(){
        $adminRole = Role::where('name', 'admin')->first();
        $users = User::all();
        return view('super-admin-pannel', compact('users'));
    }
}
