<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ["name"=> "القاهرة"],
            ["name"=> "الجيزة"],
            ["name"=> "الأسكندرية"],
            ["name"=> "الدقهلية"],
            ["name"=> "الشرقية"],
            ["name"=> "المنوفية"],
            ["name"=> "القليوبية"],
            ["name"=> "البحيرة"],
            ["name"=> "الغربية"],
            ["name"=> "بور سعيد"],
            ["name"=> "دمياط"],
            ["name"=> "الإسماعلية"],
            ["name"=> "السويس"],
            ["name"=> "كفر الشيخ"],
            ["name"=> "الفيوم"],
            ["name"=> "بني سويف"],
            ["name"=> "مطروح"],
            ["name"=> "شمال سيناء"],
            ["name"=> "جنوب سيناء"],
            ["name"=> "المنيا"],
            ["name"=> "أسيوط"],
            ["name"=> "سوهاج"],
            ["name"=> "قنا"],
            ["name"=> "البحر الأحمر"],
            ["name"=> "الأقصر"],
            ["name"=> "أسوان"],
            ["name"=> "الواحات"],
            ["name"=> "الوادي الجديد"]
        ]);
    }
}
