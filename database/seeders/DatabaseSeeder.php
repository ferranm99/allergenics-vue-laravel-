<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);

        $this->call(ProductsTableSeeder::class);
        $this->call(PriceGroupsTableSeeder::class);
        $this->call(PricesTableSeeder::class);

        $this->call(ContentRegionsTableSeeder::class);
        $this->call(ContentPagesTableSeeder::class);
        $this->call(MediaTableSeeder::class);

        $this->call(SurveysTableSeeder::class);
        $this->call(SurveyPagesTableSeeder::class);
        $this->call(SurveyQuestionsTableSeeder::class);



    }
}
