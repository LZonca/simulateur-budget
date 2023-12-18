<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $addAdmin = Permission::create(['name' => 'create admin']);

        // Assign permissions to roles
        $adminPermissions = [
            $addCategories, $seeUsers,  $deleteUsers
        ];

        $administrateur->givePermissionTo($adminPermissions);
        $superAdministrateur->givePermissionTo($adminPermissions);
        $superAdministrateur->givePermissionTo($editUsers);
        $superAdministrateur->givePermissionTo($addAdmin);

        /*
            ADMIN
        */

    }
}
