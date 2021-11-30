<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat sample superadmin
            $admin = new User();
            $admin->name = 'Super Admin';
            $admin->email = 'admi@gmail.com';
            $admin->password = bcrypt ('ievent');
            $admin->save();
            $admin->attachRole('Superadministrator');
        // Membuat sample admin
            $admin = new User();
            $admin->name = 'Admin';
            $admin->email = 'admin2@gmail.com';
            $admin->password = bcrypt ('ievent');
            $admin->save();
            $admin->attachRole('Administrator');
        // Membuat sample member
            $member = new User();
            $member->name = 'User';
            $member->email = 'member@gmail.com';
            $member->password = bcrypt ('ievent');
            $member->save();
            $member->attachRole('user');

    }
}