<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('prices')->delete();

        \DB::table('prices')->insert(array (

            1 =>
            array (
                'id' => 9,
                'price_group_id' => 1,
                'product_id' => 1,
                'qty' => 1,
                'price' => 117.39,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            2 =>
            array (
                'id' => 10,
                'price_group_id' => 1,
                'product_id' => 1,
                'qty' => 2,
                'price' => 203.48,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            3 =>
            array (
                'id' => 11,
                'price_group_id' => 1,
                'product_id' => 1,
                'qty' => 3,
                'price' => 292.17,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            4 =>
            array (
                'id' => 12,
                'price_group_id' => 1,
                'product_id' => 1,
                'qty' => 4,
                'price' => 375.65,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            5 =>
            array (
                'id' => 13,
                'price_group_id' => 2,
                'product_id' => 1,
                'qty' => 1,
                'price' => 122.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            6 =>
            array (
                'id' => 14,
                'price_group_id' => 2,
                'product_id' => 1,
                'qty' => 2,
                'price' => 212.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            7 =>
            array (
                'id' => 15,
                'price_group_id' => 2,
                'product_id' => 1,
                'qty' => 3,
                'price' => 305.45,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            8 =>
            array (
                'id' => 16,
                'price_group_id' => 2,
                'product_id' => 1,
                'qty' => 4,
                'price' => 392.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            9 =>
            array (
                'id' => 17,
                'price_group_id' => 1,
                'product_id' => 2,
                'qty' => 1,
                'price' => 117.39,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            10 =>
            array (
                'id' => 18,
                'price_group_id' => 1,
                'product_id' => 2,
                'qty' => 2,
                'price' => 203.48,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            11 =>
            array (
                'id' => 19,
                'price_group_id' => 1,
                'product_id' => 2,
                'qty' => 3,
                'price' => 292.17,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            12 =>
            array (
                'id' => 20,
                'price_group_id' => 1,
                'product_id' => 2,
                'qty' => 4,
                'price' => 375.65,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            13 =>
            array (
                'id' => 21,
                'price_group_id' => 2,
                'product_id' => 2,
                'qty' => 1,
                'price' => 122.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            14 =>
            array (
                'id' => 22,
                'price_group_id' => 2,
                'product_id' => 2,
                'qty' => 2,
                'price' => 212.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            15 =>
            array (
                'id' => 23,
                'price_group_id' => 2,
                'product_id' => 2,
                'qty' => 3,
                'price' => 305.45,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            16 =>
            array (
                'id' => 24,
                'price_group_id' => 2,
                'product_id' => 2,
                'qty' => 4,
                'price' => 392.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            17 =>
            array (
                'id' => 25,
                'price_group_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'price' => 117.39,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            18 =>
            array (
                'id' => 26,
                'price_group_id' => 1,
                'product_id' => 3,
                'qty' => 2,
                'price' => 203.48,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            19 =>
            array (
                'id' => 27,
                'price_group_id' => 1,
                'product_id' => 3,
                'qty' => 3,
                'price' => 292.17,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            20 =>
            array (
                'id' => 28,
                'price_group_id' => 1,
                'product_id' => 3,
                'qty' => 4,
                'price' => 375.65,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            21 =>
            array (
                'id' => 29,
                'price_group_id' => 2,
                'product_id' => 3,
                'qty' => 1,
                'price' => 122.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            22 =>
            array (
                'id' => 30,
                'price_group_id' => 2,
                'product_id' => 3,
                'qty' => 2,
                'price' => 212.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            23 =>
            array (
                'id' => 31,
                'price_group_id' => 2,
                'product_id' => 3,
                'qty' => 3,
                'price' => 305.45,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            24 =>
            array (
                'id' => 32,
                'price_group_id' => 2,
                'product_id' => 3,
                'qty' => 4,
                'price' => 392.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            25 =>
            array (
                'id' => 33,
                'price_group_id' => 1,
                'product_id' => 4,
                'qty' => 1,
                'price' => 117.39,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            26 =>
            array (
                'id' => 34,
                'price_group_id' => 1,
                'product_id' => 4,
                'qty' => 2,
                'price' => 203.48,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            27 =>
            array (
                'id' => 35,
                'price_group_id' => 1,
                'product_id' => 4,
                'qty' => 3,
                'price' => 292.17,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            28 =>
            array (
                'id' => 36,
                'price_group_id' => 1,
                'product_id' => 4,
                'qty' => 4,
                'price' => 375.65,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            29 =>
            array (
                'id' => 37,
                'price_group_id' => 2,
                'product_id' => 4,
                'qty' => 1,
                'price' => 122.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            30 =>
            array (
                'id' => 38,
                'price_group_id' => 2,
                'product_id' => 4,
                'qty' => 2,
                'price' => 212.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            31 =>
            array (
                'id' => 39,
                'price_group_id' => 2,
                'product_id' => 4,
                'qty' => 3,
                'price' => 305.45,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            32 =>
            array (
                'id' => 40,
                'price_group_id' => 2,
                'product_id' => 4,
                'qty' => 4,
                'price' => 392.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            33 =>
            array (
                'id' => 41,
                'price_group_id' => 1,
                'product_id' => 5,
                'qty' => 1,
                'price' => 117.39,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            34 =>
            array (
                'id' => 42,
                'price_group_id' => 1,
                'product_id' => 5,
                'qty' => 2,
                'price' => 203.48,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            35 =>
            array (
                'id' => 43,
                'price_group_id' => 1,
                'product_id' => 5,
                'qty' => 3,
                'price' => 292.17,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            36 =>
            array (
                'id' => 44,
                'price_group_id' => 1,
                'product_id' => 5,
                'qty' => 4,
                'price' => 375.65,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            37 =>
            array (
                'id' => 45,
                'price_group_id' => 2,
                'product_id' => 5,
                'qty' => 1,
                'price' => 122.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            38 =>
            array (
                'id' => 46,
                'price_group_id' => 2,
                'product_id' => 5,
                'qty' => 2,
                'price' => 212.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            39 =>
            array (
                'id' => 47,
                'price_group_id' => 2,
                'product_id' => 5,
                'qty' => 3,
                'price' => 305.45,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
            40 =>
            array (
                'id' => 48,
                'price_group_id' => 2,
                'product_id' => 5,
                'qty' => 4,
                'price' => 392.73,
                'created_at' => '2022-05-28 11:43:10',
                'updated_at' => '2022-05-28 11:43:10',
            ),
        ));


    }
}
