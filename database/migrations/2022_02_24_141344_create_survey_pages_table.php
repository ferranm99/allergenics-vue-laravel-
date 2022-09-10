<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyPagesTable extends Migration
{
    public function up()
    {
        Schema::create('survey_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')
                  ->constrained('surveys')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('name', 255);
            $table->string('code', 255);
            $table->integer('sort');



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_pages');
    }
}
