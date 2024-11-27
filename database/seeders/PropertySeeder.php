<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\RailwayLine;

class PropertySeeder extends Seeder
{
    public function run()
    {

        // $properties = [];
        // for ($i = 1; $i <= 100; $i++) {
        //     $properties[] = [
        //         'image_path' => 'images/mZINEGwIz4r0o9RyHjL6iBlCY7LspZ6ezo1pjSR6.png ',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];
        // }
        // DB::table('properties')->insert($properties);

  
        $propertyRailwayLines = [];
        $railwayLineIds = DB::table('railway_lines')->pluck('id')->toArray();

      
        $propertyIds =  Property::pluck('id');
        foreach ($propertyIds as $propertyId) {
            $randomLineCount = rand(1, 3); // 各物件に1〜3路線をランダムで割り当て
            $randomLines = array_rand($railwayLineIds, $randomLineCount);

            foreach ((array) $randomLines as $lineKey) {
                $propertyRailwayLines[] = [
                    'property_id' => $propertyId,
                    'railway_line_id' => $railwayLineIds[$lineKey],
                ];
            }
        }

        DB::table('property_railway_line')->insert($propertyRailwayLines);
    }
}