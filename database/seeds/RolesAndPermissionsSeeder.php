<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $role = Role::create(['name' => 'super-admin']);
        $roleTransporter = Role::create(['name'=>'transporter']);
        $roleUser = Role::create(['name'=>'user']);
        $role->givePermissionTo(Permission::all());
        $user = User::Find(1);
        $user->assignRole('super-admin');
    }
}
