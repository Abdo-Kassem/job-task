<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = array(
            "Algerian" => "جزائري", 
            "Central African" => "وسط أفريقيا",
            "Egyptian" => "مصري",
            "Emirian" => "إماراتي",
            "Palestinian" => "فلسطيني",
            "Saudi" => "سعودي",
        );

        foreach($nationalities as $nationality_en => $nationality_ar) {
             Nationality::insert([
                'name_ar' => $nationality_ar,
                'name_en' => $nationality_en
            ]);
        }
    }
}
