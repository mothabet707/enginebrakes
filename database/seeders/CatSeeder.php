<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_parent_id = DB::table('cats')->insertGetId([
            "name"=> "مركبات"
        ]);
        DB::table('cats')->insert([
            ["parent_id"=>$car_parent_id, "name"=> "الفا روميو"],
            ["parent_id"=>$car_parent_id, "name"=> "أودي"],
            ["parent_id"=>$car_parent_id, "name"=> "ايسوزو"],
            ["parent_id"=>$car_parent_id, "name"=> "ام جى"],
            ["parent_id"=>$car_parent_id, "name"=> "أوبل"],
            ["parent_id"=>$car_parent_id, "name"=> "بروتون"],
            ["parent_id"=>$car_parent_id, "name"=> "بى ام دبليو"],
            ["parent_id"=>$car_parent_id, "name"=> "بريليانس"],
            ["parent_id"=>$car_parent_id, "name"=> "بى واى دى"],
            ["parent_id"=>$car_parent_id, "name"=> "بيجو"],
            ["parent_id"=>$car_parent_id, "name"=> "بورش"],
            ["parent_id"=>$car_parent_id, "name"=> "تويوتا"],
            ["parent_id"=>$car_parent_id, "name"=> "دايو"],
            ["parent_id"=>$car_parent_id, "name"=> "دايهاتسو"],
            ["parent_id"=>$car_parent_id, "name"=> "دودج"],
            ["parent_id"=>$car_parent_id, "name"=> "جيلى"],
            ["parent_id"=>$car_parent_id, "name"=> "جاكوار"],
            ["parent_id"=>$car_parent_id, "name"=> "جيب"],
            ["parent_id"=>$car_parent_id, "name"=> "رينو"],
            ["parent_id"=>$car_parent_id, "name"=> "سايبا"],
            ["parent_id"=>$car_parent_id, "name"=> "سكودا"],
            ["parent_id"=>$car_parent_id, "name"=> "اسبرانزا"],
            ["parent_id"=>$car_parent_id, "name"=> "سانج يونغ"],
            ["parent_id"=>$car_parent_id, "name"=> "سوبارو"],
            ["parent_id"=>$car_parent_id, "name"=> "شيرى"],
            ["parent_id"=>$car_parent_id, "name"=> "شيفروليه"],
            ["parent_id"=>$car_parent_id, "name"=> "سيتروين"],
            ["parent_id"=>$car_parent_id, "name"=> "فورد"],
            ["parent_id"=>$car_parent_id, "name"=> "سيات"],
            ["parent_id"=>$car_parent_id, "name"=> "سوزوكى"],
            ["parent_id"=>$car_parent_id, "name"=> "كرايسلر"],
            ["parent_id"=>$car_parent_id, "name"=> "فيات"],
            ["parent_id"=>$car_parent_id, "name"=> "كيا"],
            ["parent_id"=>$car_parent_id, "name"=> "ﻻدا"],
            ["parent_id"=>$car_parent_id, "name"=> "فولكسفاجن"],
            ["parent_id"=>$car_parent_id, "name"=> "فولفو"],
            ["parent_id"=>$car_parent_id, "name"=> "ﻻند روفر"],
            ["parent_id"=>$car_parent_id, "name"=> "مازدا"],
            ["parent_id"=>$car_parent_id, "name"=> "مرسيدس بنز"],
            ["parent_id"=>$car_parent_id, "name"=> "ميني كوبر"],
            ["parent_id"=>$car_parent_id, "name"=> "ميتسوبيشى"],
            ["parent_id"=>$car_parent_id, "name"=> "نيسان"],
            ["parent_id"=>$car_parent_id, "name"=> "هوندا"],
            ["parent_id"=>$car_parent_id, "name"=> "هامر"],
            ["parent_id"=>$car_parent_id, "name"=> "هيونداي"]
        ]);
    }
}
