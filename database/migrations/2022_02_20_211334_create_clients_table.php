<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('type', 32);
            $table->string('uuid',36)->index();


            $table->foreignId('user_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->string('email');
            $table->string('first_name')
                  ->nullable();
            $table->string('last_name')
                  ->nullable();
            $table->string('age')
                  ->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
