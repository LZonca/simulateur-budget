<?php

namespace Database\Seeders;

use App\Models\Privilege;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::create(['name' => 'User']);
        $admin = Role::create(['name' => 'Administrateur']);
        $superadmin = Role::create(['name' => 'Super-Administrateur']);



        /*
            ADMIN
        */

        $deleteUsers = Permission::create(['name' => 'delete users']);
        $seeUsers = Permission::create(['name' => 'see users']);
        $addCategories = Permission::create(['name' => 'create category']);


        $deleteUsers->assignRole($admin);
        $deleteUsers->assignRole($superadmin);

        $seeUsers->assignRole($admin);
        $seeUsers->assignRole($superadmin);

        $seeUsers->assignRole($admin);
        $seeUsers->assignRole($superadmin);

        $addCategories->assignRole($admin);
        $addCategories->assignRole($superadmin);

        // $p = new Privilege();
        // $p->privileges_nom = "admin";
        // $p->save();

        // $p = new Privilege();
        // $p->privileges_nom = "super-admin";
        // $p->save();
    }
}
