<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PriceGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('price_groups')->delete();

        \DB::table('price_groups')->insert(array (
            0 => [
                'id' => 1,
                'name' => 'NZD Price Group',
                'currency' => 'NZD',
                'locale' => 'en_NZ',
                'tax_percent' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            1 => [
                'id' => 2,
                'name' => 'AUD Price Group',
                'currency' => 'AUD',
                'locale' => 'en_AU',
                'tax_percent' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            2 => [
                'id' => 3,
                'name' => 'Rest of World Price Group',
                'currency' => 'USD',
                'locale' => 'en_US',
                'tax_percent' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ));


    }
}
