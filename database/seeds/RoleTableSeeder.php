<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
    	Role::truncate();

        Role::create(array('name' => 'super_admin'));
        Role::create(array('name' => 'admin'));
        Role::create(array('name' => 'user'));
        Role::create(array('name' => 'edit_customer'));
        Role::create(array('name' => 'delete_customer'));
        Role::create(array('name' => 'edit_content'));
        Role::create(array('name' => 'reed_content'));
        Role::create(array('name' => 'create_customer'));
    }
}
