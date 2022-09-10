<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('price_group_id')
                  ->constrained('price_groups')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('qty')
                  ->default(1);

            $table->float('price' , 8,2);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
