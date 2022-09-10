<?php

namespace Database\Seeders;

use App\Enums\ProductGenderEnum;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (

            0 => [
                'id' => 1,
                'sku' => 'nt-food',
                'user_type' => 'PUBLIC',
                'client_type' => 'HUMAN',
                'gender' => ProductGenderEnum::ANY,
                'locale' => 'en_NZ',
                'name' => 'Food and Environmental Sensitivity Test',
                'description' => 'This test is able to identify sensitivity to a broad range of foods and environmental compounds and is our most popular test.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            1 => [
                'id' => 2,
                'sku' => 'nt-comp-womens',
                'user_type' => 'PUBLIC',
                'client_type' => 'HUMAN',
                'gender' => ProductGenderEnum::FEMALE,
                'locale' => 'en_NZ',
                'name' => 'Comprehensive Women\'s Health Test',
                'description' => 'This test provides a detailed profile of your body including your organ health and your hormonal balance and looks at what might be affecting vitality.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            2 => [
                'id' => 3,
                'sku' => 'nt-comp-mens',
                'user_type' => 'PUBLIC',
                'client_type' => 'HUMAN',
                'gender' => ProductGenderEnum::MALE,
                'locale' => 'en_NZ',
                'name' => 'Comprehensive Men\'s Health Test',
                'description' => 'This test assesses the health of a wide range of body organs, major hormones and a select range of specialised nutrients and looks at what might be affecting vitality.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            3 => [
                'id' => 4,
                'sku' => 'nt-op-nut',
                'user_type' => 'PUBLIC',
                'client_type' => 'HUMAN',
                'gender' => ProductGenderEnum::ANY,
                'locale' => 'en_NZ',
                'name' => 'Optimum Nutrition Test',
                'description' => 'This test identifies imbalances in nutrients that are important to your body\'s healthy functioning and on the presence of heavy metals that may impact your health.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            4 => [
                'id' => 5,
                'sku' => 'nt-sleep',
                'user_type' => 'PUBLIC',
                'client_type' => 'HUMAN',
                'gender' => ProductGenderEnum::ANY,
                'locale' => 'en_NZ',
                'name' => 'Sleep and Mood Test',
                'description' => 'This test assesses the functioning of those organs, hormones, neurotransmitters and nutrients involved in healthy sleep and mood.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ));


    }
}
