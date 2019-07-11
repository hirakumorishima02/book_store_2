<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['user_id' => '1','book_id'=>'1','status'=>'1','sales_date'=>'2019-07-12','sales_info'=>'111111'],
            ['user_id' => '1','book_id'=>'2','status'=>'1','sales_date'=>'2019-08-13','sales_info'=>'222222'],
            ];
        DB::table('orders')->insert($datas);
    }
}
