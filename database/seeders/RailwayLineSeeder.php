<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RailwayLine;

class RailwayLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 路線名の配列
        $railwayLines = [
            '指定無し',
            '小田急線',
            '田園都市線',
            '世田谷線',
            '東横線',
            '京王線',
        ];

        // 各路線名をデータベースに挿入
        foreach ($railwayLines as $line) {
            RailwayLine::create([
                'name' => $line,
            ]);
        }
    }
}