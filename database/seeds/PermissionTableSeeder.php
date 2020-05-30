<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role = Role::create(['name' => 'SuperAdmin']);
        // $permission = Permission::create(['name'=>'View Menu']);
        // $role=Role::find(2);
        // $permission=Permission::find(1);
        // $role->givePermissionTo($permission);
    }
}
