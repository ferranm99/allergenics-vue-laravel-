<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveyQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('survey_questions')->delete();

        \DB::table('survey_questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'survey_page_id' => 1,
                'class' => 'HUMAN',
                'type' => 'TEXT',
                'name' => 'Client First Name',
                'description' => NULL,
                'code' => 'question-client-first-name',
                'sort' => 1,
                'question' => 'First Name',
                'options' => NULL,
                'conditions' => '[]',
                'allow_multiple' => 0,
                'reset_on_refresh' => 0,
                'created_at' => '2022-03-26 12:04:51',
                'updated_at' => '2022-03-26 12:04:51',
            ),
            1 =>
            array (
                'id' => 2,
                'survey_page_id' => 1,
                'class' => 'HUMAN',
                'type' => 'TEXT',
                'name' => 'Client Last Name',
                'description' => NULL,
                'code' => 'question-client-last-name',
                'sort' => 2,
                'question' => 'Last Name',
                'options' => NULL,
                'conditions' => '[{"layout":"condition","key":"1alCYf1ehZkfj5W3","attributes":{"comparison":"=","value_to_match":"carl","subject":"question-client-first-name","as_lower":true}}]',
                'allow_multiple' => 0,
                'reset_on_refresh' => 0,
                'created_at' => '2022-03-26 12:05:17',
                'updated_at' => '2022-03-26 17:26:01',
            ),
        ));


    }
}
