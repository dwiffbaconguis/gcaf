<?php

use App\Models\Role;
use App\Models\User;
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
        $userRole = Role::where('name', 'user')->first();
        $adminRole = Role::where('name', 'admin')->first();

        $user = new User;
        $user->name = 'Test User';
        $user->email = 'test.user@gmail.com';
        $user->password = bcrypt('test1234');
        $user->save();

        $user->roles()->attach($userRole);

        $admin = new User;
        $admin->name = 'Dwiff Baconguis';
        $admin->email = 'dwiff.baconguis@gmail.com';
        $admin->password = bcrypt('test1234');
        $admin->save();

        $admin->roles()->attach($adminRole);

        $admin = new User;
        $admin->name = 'Hurry Sumalinog';
        $admin->email = 'hurry.sumalinog@gmail.com';
        $admin->password = bcrypt('test1234');
        $admin->save();

        $admin->roles()->attach($adminRole);
    }
}
