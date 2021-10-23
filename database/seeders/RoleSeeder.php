<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Super-Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Moderator']);
        Role::create(['name' => 'Editor']);
        Role::create(['name' => 'User']);


        // Super Admins
        $user = User::find(1);
        $user->assignRole('Super-Admin');
    }
}
