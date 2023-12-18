<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = Role::firstOrCreate(['name' => 'User']);
        $administrateur = Role::firstOrCreate(['name' => 'admin']);
        $superAdministrateur = Role::firstOrCreate(['name' => 'super-admin']);

        // Create 
        $deleteUsers = Permission::create(['name' => 'delete users']);
        $seeUsers = Permission::create(['name' => 'see users']);
        $addCategories = Permission::create(['name' => 'create category']);
        $editUsers = Permission::firstOrCreate(['name' => 'edit users']);

        // Assign permissions to roles
        $adminPermissions = [
            $addCategories, $seeUsers, $editUsers, $deleteUsers
        ];
        $administrateur->givePermissionTo($adminPermissions);
        $superAdministrateur->givePermissionTo($adminPermissions);

        /*
            ADMIN
        */


        $deleteUsers->assignRole($admin);
        $deleteUsers->assignRole($superadmin);

        $seeUsers->assignRole($admin);
        $seeUsers->assignRole($superadmin);

        $seeUsers->assignRole($admin);
        $seeUsers->assignRole($superadmin);

        $addCategories->assignRole($admin);
        $addCategories->assignRole($superadmin);
    }
}
