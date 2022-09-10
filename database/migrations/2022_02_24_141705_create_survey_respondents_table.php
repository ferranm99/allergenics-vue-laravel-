<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyRespondentsTable extends Migration
{
    public function up()
    {
        Schema::create('survey_respondents', function (Blueprint $table) {
            $table->id();

            $table->string('uuid', 36);

            $table->foreignId('survey_id')
                  ->constrained('surveys')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('client_id')
                  ->nullable()
                  ->constrained('clients')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_respondents');
    }
}
