<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Privilege;


class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new Privilege();
        $p->privileges_nom = "normal";
        $p->save();

        $p = new Privilege();
        $p->privileges_nom = "admin";
        $p->save();

        $p = new Privilege();
        $p->privileges_nom = "super-admin";
        $p->save();
    }
}
