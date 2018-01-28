<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->truncate();
        DB::table('shops')->insert([
        	[
        		'name'=>'shop1',
        		'station'=>'station1',
        		'chunithm'=>'4',
        		'far'=>'0',
        		'prefecture'=>'ibaraki',
        		'city'=>'mito',
        		'maimai'=>'2',
        		'voltex'=>'2',
        		'jubeat'=>'4',
        		'coaster'=>'1',
        	],
        	[
        		'name'=>'shop2',
        		'station'=>'station2',
                'far'=>'20',
                'prefecture'=>'tokyo',
                'city'=>'ueno',
        		'chunithm'=>'2',
        		'maimai'=>'2',
        		'voltex'=>'0',
        		'jubeat'=>'2',
        		'coaster'=>'0',
        	],
        	[
        		'name'=>'shop3',
        		'station'=>'station2',
                'far'=>'10',
                'prefecture'=>'tokyo',
                'city'=>'akihabara',
        		'chunithm'=>'0',
        		'maimai'=>'1',
        		'voltex'=>'0',
        		'jubeat'=>'1',
        		'coaster'=>'1',
        	],
        ]);
    }
}
