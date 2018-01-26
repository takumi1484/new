<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        DB::table('comments')->insert([
            [
                'name'=>'testuser1',
                'shop'=>'shop1',
                'comment'=>'ああああいいうえおおお',
                'created_at' => '2018-01-25 00:00:00',
            ],
            [
                'name'=>'testuser',
                'shop'=>'shop2',
                'comment'=>'２かああｙつｔｄｙっちｙｔｙ',
                'created_at' => '2018-01-25 01:00:00',
            ],
        ]);
    }
}
