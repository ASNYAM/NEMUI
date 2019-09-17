<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
                'name' => 'コーラ',
                'q1_score' => 5,
                'q2_score' => 3,
                'q3_score' => 1
            ],[
                'name' => 'ココア',
                'q1_score' => 5,
                'q2_score' => 1,
                'q3_score' => 3
            ],[
                'name' => 'レッドブル',
                'q1_score' => 3,
                'q2_score' => 5,
                'q3_score' => 5
            ],
        ]);
    }
}
