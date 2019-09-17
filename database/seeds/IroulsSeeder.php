<?php

use Illuminate\Database\Seeder;

class IroulsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('irouls')->truncate();
        DB::table('irouls')->insert([
            [
                'name' => '飲み物',
                'q1_title' => '甘い？苦い？',
                'q2_title' => '後味は？',
                'q3_title' => 'よく飲む？',
                'q1_plus' =>'甘い',
                'q1_minus' =>'苦い',
                'q2_plus' => 'スッキリ',
                'q2_minus' => 'まったり',
                'q3_plus' => '特別',
                'q3_minus' => 'よくある',
            ]
        ]);
    }
}
