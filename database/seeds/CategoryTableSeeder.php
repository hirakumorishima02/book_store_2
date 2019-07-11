<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['category' => '小説'],
            ['category' => 'ノンフィクション'],
            ['category' => 'ビジネス'],
            ['category' => '漫画'],
            ['category' => 'その他'],
            ];
        DB::table('categories')->insert($datas);
    }
}
