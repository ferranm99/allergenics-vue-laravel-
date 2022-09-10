<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('survey_questions', function (Blueprint $table) {
            $table->id();
            /*$table->foreignId('survey_id')
                  ->constrained('surveys')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');*/

            $table->foreignId('survey_page_id')
                  ->constrained('survey_pages')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->string('class', 16);
            $table->string('type', 16);
            $table->string('name', 255);
            $table->string('description', 512)->nullable();
            $table->string('code', 255);
            $table->integer('sort')
                  ->default(1);

            $table->text('question')
                  ->nullable();

            $table->json('options')
                  ->nullable();

            $table->json('conditions')
                  ->nullable();

            $table->boolean('allow_multiple')
                  ->default(false)
                  ->nullable();

            $table->boolean('reset_on_refresh')
                  ->default(false)
                  ->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_questions');
    }
}
