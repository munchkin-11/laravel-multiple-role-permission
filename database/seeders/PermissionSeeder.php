<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'admin_access',
            ],
            [
                'id'    => 2,
                'title' => 'user_access',
            ],
        ];

        \App\Models\Permission::insert($permissions);
    }
}
