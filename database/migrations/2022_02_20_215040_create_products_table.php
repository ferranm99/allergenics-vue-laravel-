<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();


            $table->string('sku',36);
            $table->string('user_type',36); // public / practitioner
            $table->string('client_type',36); // human / pet
            $table->string('gender',10); // female/male/any
            $table->string('locale', 16); // en_AU but could be zh-Hans-CN too

            $table->string('name',255);
            $table->string('status',30)->default(\App\Enums\OrderStatusEnum::ORDER_UNPAID);
            $table->text('description');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
