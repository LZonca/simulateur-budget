<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::where('name', 'user')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $superAdminRole = Role::where('name', 'super-admin')->first();

        $u = new User();
        $u->name = "User1";
        $u->prenom = "User1";
        $u->email = "user1@gmail.com";
        $u->adresse = "adresse1";
        $u->codePostal = "codePostal1";
        $u->ville = "ville1";
        $u->pays = "pays1";
        $u->tel = "0000000001";
        $u->assignRole($adminRole);
        $u->password = hash::make("user1");
        $u->save();

        $u = new User();
        $u->name = "User2";
        $u->prenom = "User2";
        $u->email = "user2@gmail.com";
        $u->adresse = "adresse2";
        $u->codePostal = "codePostal2";
        $u->ville = "ville2";
        $u->pays = "pays2";
        $u->tel = "0000000002";
        // $u->privileges_id = 1;
        $u->password = hash::make("user2");
        $u->save();

        $u = new User();
        $u->name = "admin1";
        $u->prenom = "admin1";
        $u->email = "admin1@gmail.com";
        $u->adresse = "adresse3";
        $u->codePostal = "codePostal3";
        $u->ville = "ville3";
        $u->pays = "pays3";
        $u->tel = "0000000003";
        $u->assignRole($adminRole);
        $u->password = hash::make("admin1");
        $u->save();

        $u = new User();
        $u->name = "superadmin1";
        $u->prenom = "superadmin1";
        $u->email = "superadmin1@gmail.com";
        $u->adresse = "adresse4";
        $u->codePostal = "codePostal4";
        $u->ville = "ville4";
        $u->pays = "pays4";
        $u->tel = "0000000004";
        $u->assignRole($superAdminRole);
        $u->password = hash::make("superadmin1");
        $u->save();
    }
}
