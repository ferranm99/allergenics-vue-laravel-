<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersAddshoppingFields extends Migration
{
    public function up()
    {


        Schema::table('users', function (Blueprint $table) {
            // remove laravel dest

            $table->dropColumn('name');

            //these are added in reverse order due to ->after

            $table->string('phone', 64)->after('password')
                                       ->nullable();
            $table->string('country', 2)->after('password')
                                        ->default('NZ');
            $table->string('postcode', 64)->after('password')->nullable();
            $table->string('city', 255)->after('password')->nullable();
            $table->string('address_line2', 512)->after('password')->nullable();
            $table->string('address_line1', 512)->after('password')->nullable();
            $table->string('last_name')->after('password')
                                       ->nullable();
            $table->string('first_name')->after('password')
                                        ->nullable();

            $table->boolean('can_pay_on_account')->after('password')->default(false);
            $table->string('type', 32)->after('password')->default(\App\Enums\UserTypeEnum::PUBLIC());
            $table->string('stripe_customer', 255)->after('password')->nullable();

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
