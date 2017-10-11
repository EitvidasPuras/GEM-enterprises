<?php

use App\User;
use App\Role;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=Role::where('name','User')->first();
        $role_supplier=Role::where('name','Supplier')->first();
        $role_admin=Role::where('name','Admin')->first();

        $user= new User();
        $user->name='Johaan';
        $user->email='Johhn@gmail.com';
        $user->password=bcrypt('John11');
        $user->save();
        $user->roles()->attach($role_user);

        $supplier= new User();
        $supplier->name='Joheeaae';
        $supplier->email='Josss@gmail.com';
        $supplier->password=bcrypt('ccc22c');
        $supplier->save();
        $supplier->roles()->attach($role_supplier);

        $admin= new User();
        $admin->name='AAAaa';
        $admin->email='JohBBBhn@gmail.com';
        $admin->password=bcrypt('aaaa33');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
