<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'MT',
            'description' => 'Main Term',
            'slug' => '',
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',     
        ]);
        DB::table('categories')->insert([
            'name' => 'BT',
            'description' => 'Broader Term',     
            'slug' => '',
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'NT',
            'description' => 'Narrow Term',     
            'slug' => '',
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'RT',
            'description' => 'Related Term', 
            'slug' => '',    
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'IT',
            'description' => 'Indonesian Term',
            'slug' => '',     
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'SN',
            'description' => 'Scope Note',
            'slug' => '',     
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'SO',
            'description' => 'Source',
            'slug' => '',     
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'US',
            'description' => 'Use',
            'slug' => '',     
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
        DB::table('categories')->insert([
            'name' => 'UF',
            'description' => 'Use For',   
            'slug' => '',  
            'created_at' => '2018-08-20 00:00:00',
            'updated_at' => '2018-08-24 00:00:00',
        ]);
    }
}
