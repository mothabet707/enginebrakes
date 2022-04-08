<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crafts')->insert([
            ["name"=> "ميكانيكا"],
            ["name"=> "سمكرة"],
            ["name"=> "دوكو"],
            ["name"=> "كهرباء"],
            ["name"=> "عفشة"],
            ["name"=> "اكسسوارات"],
            ["name"=> "زيوت وشحوم"],
            ["name"=> "جنوط وكاوتش"],
            ["name"=> "افلام حماية"],
            ["name"=> "سروجي"],
            ["name"=> "مغسلة"],
            ["name"=> "جاكمانات"]
        ]);
    }
}
