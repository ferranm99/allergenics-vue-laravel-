<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                  ->constrained('orders')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('qty')
                  ->default(1);

            
            $table->float('price', 8, 2);    // concrete price (ex tax) for this item
            $table->float('tax', 8, 2);      // concrete tax amount for this item
            $table->float('discount', 8, 2)->default(0.00); // concrete discount amount for this item
            

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
