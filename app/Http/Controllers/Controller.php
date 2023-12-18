<?php

namespace App\Http\Controllers;

use App\Models\Privilege;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
        $adminPerm = Privilege::find(2);
        $adminUsers = $adminPerm->permission;
        return view('super-admin-pannel', compact('adminUsers'));
    }
}
