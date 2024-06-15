<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('property_types', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('type')->unique();
    //         $table->string('name')->unique();
    //         $table->timestamps();
    //     });

    //     // デフォルトの値を挿入
    //     DB::table('property_types')->insert([
    //         ['type' => 'rent', 'name' => '賃貸'], 
    //         ['type' => 'sale', 'name' => '売買'],
    //     ]);
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_types');
    }
}