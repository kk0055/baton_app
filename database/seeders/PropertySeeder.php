<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {


        $this->createProperties();
        
        $propertyRailwayLines = [];
        $railwayLineIds = DB::table('railway_lines')->pluck('id')->toArray();

        $propertyIds = Property::pluck('id');
        foreach ($propertyIds as $propertyId) {
            $randomLines = array_rand($railwayLineIds, 1);

            foreach ((array) $randomLines as $lineKey) {
                $propertyRailwayLines[] = [
                    'property_id' => $propertyId,
                    'railway_line_id' => $railwayLineIds[$lineKey],
                ];
            }
        }
        // DB::table('property_railway_line')->truncate();
        // DB::table('properties')->truncate();
        
        DB::table('property_railway_line')->insert($propertyRailwayLines);
    }
    
   /**
     * 物件100件追加
     *
     * @return void
     */
    public function createProperties()
    {

        $image_path_array = [
            'images/PpN5jVVfTcCCgaTwuue98bKvV3AZ42wrbDiqBCPk.png',
            'images/Z0PKQeuaD0yaLuOt6ve7nxNHhflaPDGejhW037CE.png',
            'images/ulnKdtG6Onl5ztp1PnmJUStJx8MzBGaVjXnWRhOZ.png',
            'images/e4YgneKxjIHVlVn3fW79kpY8zH9py0nRoBRALdHG.png',
            'images/ncmY2k2IfCtrglMUzyCAgqtrt3PKeisvGsOW3eRV.png',
            'images/RSvQp016cY1IuejrteSrTfo9Qv867I1mqDzz1NXU.png',
            'images/KehKI7XSMxGXkDkO9UMlDVWvengQTG7QsiFNr17l.png',
            'images/ftYNJNrc0v84ErndKo19BJJPcUpi16qcK6e5EcS6.png',
        ];          
        

        $properties = [];
        for ($i = 1; $i <= 150; $i++) {
            $properties[] = [
                'image_path' => $image_path_array[array_rand($image_path_array)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('properties')->insert($properties);
    }
}