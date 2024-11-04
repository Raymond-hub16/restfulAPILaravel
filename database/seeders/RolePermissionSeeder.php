<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);

        Permission::create(['name' => 'add-tulisan']);
        Permission::create(['name' => 'edit-tulisan']);
        Permission::create(['name' => 'delete-tulisan']);
        Permission::create(['name' => 'view-tulisan']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('add-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('delete-user');
        $roleAdmin->givePermissionTo('view-user');

        $roleWriter = Role::findByName('writer');
        $roleWriter->givePermissionTo('add-tulisan');
        $roleWriter->givePermissionTo('edit-tulisan');
        $roleWriter->givePermissionTo('delete-tulisan');
        $roleWriter->givePermissionTo('view-tulisan');
    }
}
