<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Hiraku Morishima','email'=>'ujinchu@i.softbank.jp','email_verified_at'=>'2000-02-02 00:00:00','password'=>'4v8h7mus'],
            ];
        DB::table('users')->insert($datas);
    }
}
