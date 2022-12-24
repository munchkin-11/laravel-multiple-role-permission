<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = \App\Models\Permission::all();
        \App\Models\Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        \App\Models\Role::findOrFail(2)->permissions()->attach(2);
    }
}
