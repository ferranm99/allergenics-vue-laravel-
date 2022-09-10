<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');


            $table->string('uuid', 36);

            $table->string('type', 32);
            $table->string('processing_time', 32)
                  ->default('standard');
            $table->string('status', 32)
                  ->default(\App\Enums\OrderStatusEnum::ORDER_NEW);

            $table->string('client_first_name')
                  ->nullable();
            $table->string('client_last_name')
                  ->nullable();

            $table->string('client_gender', 10);

            $table->string('cart_id', 36);

            $table->string('version', 32)
                  ->default('1.0.0'); // I think this is the woo version

            $table->boolean('consultation')
                  ->default(false);
            $table->boolean('prescription')
                  ->default(false);
            $table->boolean('questionnaire_complete')
                  ->default(false);
            $table->unsignedInteger('questionnaire_current_page')
                  ->nullable();

            $table->string('currency', 4)
                  ->default('NZD');

            $table->string('payment_method', 36)
                  ->nullable();

            // totals
            $table->float('sub_total')
                  ->nullable();
            $table->float('sub_total_inc_tax')
                  ->nullable();
            $table->float('tax_total')
                  ->nullable();
            $table->float('fees_total')
                  ->nullable();
            $table->float('total')
                  ->nullable();
            $table->float('discount_amount')
                  ->nullable();



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
