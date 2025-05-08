<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Matériel de diagnostic'],
            ['name' => 'Instruments médicaux'],
            ['name' => 'Matériel de soins et pansements'],
            ['name' => 'Hygiène et protection'],
            ['name' => 'Mobilier médical et aides techniques'],
            ['name' => 'Matériel de rééducation et de kinésithérapie'],
            ['name' => 'Orthèses et supports'],
            ['name' => 'Matériel pour stomies'],
            ['name' => 'Matériel pour le maintien à domicile (MAD)'],
        ]);
    }
}
