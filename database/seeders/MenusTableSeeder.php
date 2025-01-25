<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'slug' => 'admin',
                'name' => 'Admin',
                'icon' => 'mdi mdi-account-lock',
                'parent' => NULL,
                'grand' => NULL,
                'ordering' => 8,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'bread',
                'name' => 'Bread',
                'icon' => 'ft-target',
                'parent' => NULL,
                'grand' => 'access_control',
                'ordering' => 2,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'control_panel',
                'name' => 'Control Panel',
                'icon' => 'mdi mdi-tools',
                'parent' => NULL,
                'grand' => NULL,
                'ordering' => 4,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'dashboard',
                'name' => 'Dashboard',
                'icon' => 'bx bx-home-circle',
                'parent' => NULL,
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'media',
                'name' => 'Media',
                'icon' => 'bx bx-folder',
                'parent' => NULL,
                'grand' => NULL,
                'ordering' => 5,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'menu',
                'name' => 'Menu',
                'icon' => NULL,
                'parent' => NULL,
                'grand' => 'access_control',
                'ordering' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'role',
                'name' => 'Role',
                'icon' => NULL,
                'parent' => NULL,
                'grand' => 'access_control',
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'access_control',
                'name' => 'Access Control',
                'icon' => 'mdi mdi-tools',
                'parent' => 'control_panel',
                'grand' => NULL,
                'ordering' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'app_setting',
                'name' => 'App Setting',
                'icon' => 'bx bx-cog',
                'parent' => 'control_panel',
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'location',
                'name' => 'Location',
                'icon' => 'mdi mdi-tools',
                'parent' => NULL,
                'grand' => NULL,
                'ordering' => 4,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'country',
                'name' => 'Country',
                'icon' => 'bx bx-cog',
                'parent' => 'location',
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'state',
                'name' => 'State',
                'icon' => 'bx bx-cog',
                'parent' => 'location',
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'district',
                'name' => 'District',
                'icon' => 'bx bx-cog',
                'parent' => 'location',
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => 'city',
                'name' => 'City',
                'icon' => 'bx bx-cog',
                'parent' => 'location',
                'grand' => NULL,
                'ordering' => 0,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
