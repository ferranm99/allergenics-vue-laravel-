<?php

namespace Database\Seeders;

use App\Models\SurveyPage;
use Illuminate\Database\Seeder;

class SurveyPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('survey_pages')->delete();

        \DB::table('survey_pages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'survey_id' => 1,
                'name' => 'Client Page',
                'code' => 'public-client-page',
                'sort' => 1,
                'created_at' => '2022-03-13 16:26:31',
                'updated_at' => '2022-03-13 22:41:36',
            ),
            1 =>
            array (
                'id' => 2,
                'survey_id' => 1,
                'name' => 'Gender Page',
                'code' => 'public-gender-page',
                'sort' => 2,
                'created_at' => '2022-03-13 16:27:06',
                'updated_at' => '2022-03-13 22:41:36',
            ),
            2 =>
            array (
                'id' => 3,
                'survey_id' => 1,
                'name' => 'Age Page',
                'code' => 'public-age-page',
                'sort' => 3,
                'created_at' => '2022-03-13 16:27:28',
                'updated_at' => '2022-03-13 22:41:36',
            ),
            3 =>
            array (
                'id' => 4,
                'survey_id' => 1,
                'name' => 'Pregnant Page',
                'code' => 'public-pregnant-page',
                'sort' => 4,
                'created_at' => '2022-03-13 16:28:54',
                'updated_at' => '2022-03-13 16:28:54',
            ),
            4 =>
            array (
                'id' => 5,
                'survey_id' => 1,
                'name' => 'Breastfeeding Page',
                'code' => 'public-breastfeeding-page',
                'sort' => 5,
                'created_at' => '2022-03-13 16:29:27',
                'updated_at' => '2022-03-13 16:29:27',
            ),
            5 =>
            array (
                'id' => 6,
                'survey_id' => 1,
                'name' => 'Digestive Page',
                'code' => 'public-digestive-page',
                'sort' => 6,
                'created_at' => '2022-03-13 16:34:21',
                'updated_at' => '2022-03-13 16:34:21',
            ),
            6 =>
            array (
                'id' => 7,
                'survey_id' => 1,
                'name' => 'Respiratory Page',
                'code' => 'public-respiratory-page',
                'sort' => 7,
                'created_at' => '2022-03-13 16:35:23',
                'updated_at' => '2022-03-13 16:35:23',
            ),
            7 =>
            array (
                'id' => 8,
                'survey_id' => 1,
                'name' => 'Skin Page',
                'code' => 'public-skin-page',
                'sort' => 8,
                'created_at' => '2022-03-13 16:35:59',
                'updated_at' => '2022-03-13 16:35:59',
            ),
            8 =>
            array (
                'id' => 9,
                'survey_id' => 1,
                'name' => 'Urinary page',
                'code' => 'public-urinary-page',
                'sort' => 9,
                'created_at' => '2022-03-13 17:39:06',
                'updated_at' => '2022-03-13 17:39:06',
            ),
            9 =>
            array (
                'id' => 10,
                'survey_id' => 1,
                'name' => 'Female Reproductive Page',
                'code' => 'public-female-reproductive-page',
                'sort' => 10,
                'created_at' => '2022-03-13 17:39:57',
                'updated_at' => '2022-03-13 17:39:57',
            ),
            10 =>
            array (
                'id' => 11,
                'survey_id' => 1,
                'name' => 'Hormonal Page',
                'code' => 'public-hormonal-page',
                'sort' => 11,
                'created_at' => '2022-03-13 17:40:34',
                'updated_at' => '2022-03-13 17:40:34',
            ),
            11 =>
            array (
                'id' => 12,
                'survey_id' => 1,
                'name' => 'Immune Page',
                'code' => 'public-immune-page',
                'sort' => 12,
                'created_at' => '2022-03-13 17:41:08',
                'updated_at' => '2022-03-13 17:41:08',
            ),
            12 =>
            array (
                'id' => 13,
                'survey_id' => 1,
                'name' => 'Musculo-skeletal Page',
                'code' => 'public-musculo-skeletal',
                'sort' => 13,
                'created_at' => '2022-03-13 17:41:46',
                'updated_at' => '2022-03-13 17:41:46',
            ),
            13 =>
            array (
                'id' => 14,
                'survey_id' => 1,
                'name' => 'Mental Page',
                'code' => 'public-mental-page',
                'sort' => 14,
                'created_at' => '2022-03-13 17:42:27',
                'updated_at' => '2022-03-13 17:42:27',
            ),
            14 =>
            array (
                'id' => 15,
                'survey_id' => 1,
                'name' => 'Moods Page',
                'code' => 'public-moods-page',
                'sort' => 15,
                'created_at' => '2022-03-13 17:43:29',
                'updated_at' => '2022-03-13 17:43:29',
            ),
            15 =>
            array (
                'id' => 16,
                'survey_id' => 1,
                'name' => 'Medications Page',
                'code' => 'public-medications-page',
                'sort' => 16,
                'created_at' => '2022-03-13 17:44:04',
                'updated_at' => '2022-03-13 17:44:04',
            ),
        ));



        SurveyPage::all()->each(function ($item, $key) {
            $item->generateSlug();
            $item->save();
        });

    }
}
