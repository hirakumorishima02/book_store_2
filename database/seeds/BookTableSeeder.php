<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['category_id' => '1','title'=>'海賊と呼ばれた男 下','author'=>'百田尚樹','isbn'=>'978-4-06-217565-4','price'=>'1600','publisher'=>'相川書房','status'=>'1','photo_path'=>'/images/novel.jpg'],
            ['category_id' => '3','title'=>'京セラ・アメーバ方式','author'=>'国友隆二','isbn'=>'4-89386-497-1','price'=>'1500','publisher'=>'アイ・ディ・ジー・ジャパン','status'=>'2','photo_path'=>'/images/bussiness.jpg'],
            ['category_id' => '5','title'=>'はじめてのTOEIC','author'=>'長本吉斉','isbn'=>'4-7569-0056-9','price'=>'1800','publisher'=>'大泉書店','status'=>'3','photo_path'=>'/images/others.jpg'],
            ];
        DB::table('books')->insert($datas);
    }
}
