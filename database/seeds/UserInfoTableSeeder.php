<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['user_id' => '1','address'=>'京都府京都市〇〇〇〇','zip_code'=>'600-0000','tel'=>'000-0000-0000'],
            ];
        DB::table('user_infos')->insert($datas);
    }
}
