<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyRespondentAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('survey_respondent_answers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('survey_id')
                  ->constrained('surveys')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('question_id')
                  ->constrained('survey_questions')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('respondent_id')
                  ->constrained('survey_respondents')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->string('question_code', 255);
            $table->string('question_class', 16);
            $table->string('question_type', 16);

            $table->json('answer')
                  ->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_respondent_answers');
    }
}
