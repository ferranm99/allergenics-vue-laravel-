<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('price_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);

            $table->string('currency', 5);
            $table->string('locale', 16); // en_AU but could be zh-Hans-CN too

            $table->float('tax_percent')
                  ->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('price_groups');
    }
}
