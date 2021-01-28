<?php

namespace Database\Seeders;

use App\Ability;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug',Ability::ADMIN)->first();
        $changeNews = Permission::where('slug',\App\Permission::CHANGE_NEWS)->first();

        $user = new User();
        $user->name = 'Michese';
        $user->email = 'test@test.com';
        $user->password = \Hash::make('12345678');
        $user->save();

        $user->roles()->attach($admin);
        $user->permissions()->attach($changeNews);
    }
}
