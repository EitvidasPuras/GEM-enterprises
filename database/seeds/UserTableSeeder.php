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
        $user->name='userTest';
        $user->lastName='userTestinson';
        $user->email='user@test.com';
        $user->password=bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        $supplier= new User();
        $supplier->name='supplierTest';
        $supplier->lastName='supplierTestinson';
        $supplier->email='supplier@test.com';
        $supplier->password=bcrypt('123456');
        $supplier->save();
        $supplier->roles()->attach($role_supplier);

        $admin= new User();
        $admin->name='adminTest';
        $admin->lastName='adminTestinson';
        $admin->email='admin@test.com';
        $admin->password=bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
