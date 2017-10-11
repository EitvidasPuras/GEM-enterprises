<?php
use App\Role;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description='A normal user';
        $role_user->save();

        $role_user = new Role();
        $role_user->name = 'Supplier';
        $role_user->description='A supplier';
        $role_user->save();

        $role_user = new Role();
        $role_user->name = 'Admin';
        $role_user->description='An admin';
        $role_user->save();
    }
}
