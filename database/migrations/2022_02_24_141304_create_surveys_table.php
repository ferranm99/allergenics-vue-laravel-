<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('page_prefix', 32);
            $table->string('start_page', 255)->nullable();
            $table->string('code', 32);


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
