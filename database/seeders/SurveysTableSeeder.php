<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('surveys')->delete();

        \DB::table('surveys')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Standard Public Survey',
                'code' => '4Yw7Kfs69wf',
                'page_prefix' => 'public',
                'created_at' => '2022-03-13 14:01:43',
                'updated_at' => '2022-03-13 14:01:43',
            ),
        ));


    }
}
