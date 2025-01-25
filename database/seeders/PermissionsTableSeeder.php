<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['id' => 1, 'menu_slug' => 'role', 'permission_key' => 'browse_role', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'menu_slug' => 'role', 'permission_key' => 'read_role', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'menu_slug' => 'role', 'permission_key' => 'add_role', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'menu_slug' => 'role', 'permission_key' => 'edit_role', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'menu_slug' => 'role', 'permission_key' => 'delete_role', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'menu_slug' => 'menu', 'permission_key' => 'browse_menu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'menu_slug' => 'menu', 'permission_key' => 'read_menu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'menu_slug' => 'menu', 'permission_key' => 'add_menu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'menu_slug' => 'menu', 'permission_key' => 'edit_menu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'menu_slug' => 'menu', 'permission_key' => 'delete_menu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 11, 'menu_slug' => 'access_control', 'permission_key' => 'browse_access_control', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 12, 'menu_slug' => 'dashboard', 'permission_key' => 'browse_dashboard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 13, 'menu_slug' => 'bread', 'permission_key' => 'browse_bread', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 14, 'menu_slug' => 'bread', 'permission_key' => 'read_bread', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 15, 'menu_slug' => 'bread', 'permission_key' => 'add_bread', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 16, 'menu_slug' => 'bread', 'permission_key' => 'edit_bread', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 17, 'menu_slug' => 'bread', 'permission_key' => 'delete_bread', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 18, 'menu_slug' => 'app_setting', 'permission_key' => 'browse_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 19, 'menu_slug' => 'app_setting', 'permission_key' => 'read_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 20, 'menu_slug' => 'app_setting', 'permission_key' => 'add_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 21, 'menu_slug' => 'app_setting', 'permission_key' => 'edit_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 22, 'menu_slug' => 'app_setting', 'permission_key' => 'delete_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 23, 'menu_slug' => 'app_setting', 'permission_key' => 'logo_app_setting', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 24, 'menu_slug' => 'admin', 'permission_key' => 'browse_admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 25, 'menu_slug' => 'admin', 'permission_key' => 'read_admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 26, 'menu_slug' => 'admin', 'permission_key' => 'add_admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 27, 'menu_slug' => 'admin', 'permission_key' => 'edit_admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 28, 'menu_slug' => 'admin', 'permission_key' => 'delete_admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 29, 'menu_slug' => 'admin', 'permission_key' => 'change_email', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 30, 'menu_slug' => 'admin', 'permission_key' => 'change_password', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 31, 'menu_slug' => 'admin', 'permission_key' => 'change_status', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 32, 'menu_slug' => 'media', 'permission_key' => 'browse_media', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 33, 'menu_slug' => 'media', 'permission_key' => 'read_media', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 34, 'menu_slug' => 'media', 'permission_key' => 'add_media', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 35, 'menu_slug' => 'media', 'permission_key' => 'edit_media', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 36, 'menu_slug' => 'media', 'permission_key' => 'delete_media', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
             ['id' => 37, 'menu_slug' => 'country', 'permission_key' => 'browse_country', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 38, 'menu_slug' => 'country', 'permission_key' => 'read_country', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 39, 'menu_slug' => 'country', 'permission_key' => 'add_country', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 40, 'menu_slug' => 'country', 'permission_key' => 'edit_country', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 41, 'menu_slug' => 'country', 'permission_key' => 'delete_country', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
             ['id' => 42, 'menu_slug' => 'state', 'permission_key' => 'browse_state', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 43, 'menu_slug' => 'state', 'permission_key' => 'read_state', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 44, 'menu_slug' => 'state', 'permission_key' => 'add_state', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 45, 'menu_slug' => 'state', 'permission_key' => 'edit_state', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 46, 'menu_slug' => 'state', 'permission_key' => 'delete_state', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
             ['id' => 47, 'menu_slug' => 'district', 'permission_key' => 'browse_district', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 48, 'menu_slug' => 'district', 'permission_key' => 'read_district', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 49, 'menu_slug' => 'district', 'permission_key' => 'add_district', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 50, 'menu_slug' => 'district', 'permission_key' => 'edit_district', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 51, 'menu_slug' => 'district', 'permission_key' => 'delete_district', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
             ['id' => 52, 'menu_slug' => 'city', 'permission_key' => 'browse_city', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 53, 'menu_slug' => 'city', 'permission_key' => 'read_city', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 54, 'menu_slug' => 'city', 'permission_key' => 'add_city', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 55, 'menu_slug' => 'city', 'permission_key' => 'edit_city', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 56, 'menu_slug' => 'city', 'permission_key' => 'delete_city', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
