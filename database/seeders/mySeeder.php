<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class mySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'writer']);
     $permission = Permission::create(['name' => 'edit articles']);

$role->givePermissionTo($permission);
$permission->assignRole($role);


    }
}
