<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $changeNews = new Permission();
        $changeNews->name = 'Change news';
        $changeNews->slug = \App\Permission::CHANGE_NEWS;
        $changeNews->save();
    }
}
