<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesktopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('desktops')->insert([
            [
                'code' => 'Pcs',
                'brand' => 'Office A',
                'model' => 'available',
                'processor' => 'Intel Core i5',
                'ram' => '8GB',
                'storage' => '256GB SSD',
                'status' => 'available',
            ],
            [
                'code' => 'Pcs',
                'brand' => 'Office B',
                'model' => 'in_use',
                'processor' => 'Intel Core i7',
                'ram' => '16GB',
                'storage' => '512GB SSD',
                'status' => 'in_use',
            ],
            [
                'code' => 'Pcs',
                'brand' => 'Office C',
                'model' => 'available',
                'processor' => 'Intel Core i5',
                'ram' => '8GB',
                'storage' => '256GB SSD',
                'status' => 'available',
            ],
        ]);
    }
}
