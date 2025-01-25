<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = \Illuminate\Support\Facades\File::get("database/data/pin_codes.json");
        $data = json_decode($json);
        foreach ($data as $pinCode) {
            City::updateOrCreate([
                'name' => $pinCode->name,
                'pin_code' => $pinCode->pin_code,
                'district_id' => $pinCode->district_id,
            ]);
        }
    }
}
