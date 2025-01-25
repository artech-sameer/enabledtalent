<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                'name' => 'AR Technology',
                'gender' => 2,
                'email' => 'admin@artechnology.in',
                'mobile' => '+919315647380',
                'password' => Hash::make(123456),  // Hash the password
                'remember_token' => NULL,
                'media_id' => NULL,
                'date_of_birth' => NULL,
                'state_id' => NULL,
                'district_id' => NULL,
                'city_id' => NULL,
                'locality' => NULL,
                'address' => NULL,
                'pincode' => NULL,
                'landmark' => NULL,
                'status_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
            ],
            [
                'id' => 2,
                'role_id' => 2,
                'name' => 'Asif Jamal',
                'gender' => 2,
                'email' => 'asif@artechnology.in',
                'mobile' => '+918109763160',
                'password' => Hash::make(123456),  // Hash the password
                'remember_token' => NULL,
                'media_id' => NULL,
                'date_of_birth' => NULL,
                'state_id' => NULL,
                'district_id' => NULL,
                'city_id' => NULL,
                'locality' => NULL,
                'address' => NULL,
                'pincode' => NULL,
                'landmark' => NULL,
                'status_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
            ],
        ]);
    }
}
