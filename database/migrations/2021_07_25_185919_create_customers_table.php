<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email')->unique();
            $table->string('phone', 50);
            $table->string('password', 50);
            $table->string('image', 400);
            $table->string('identity', 100);
            $table->tinyInteger('status');
            $table->string('two_factor', 255);
            $table->string('group', 100);
            $table->boolean('affiliate');
            $table->boolean('news_letter');
            $table->string('company', 255);
            $table->string('website', 255);
            $table->string('tracking_code', 255);
            $table->string('commission', 255);
            $table->string('payment_method', 255);
            $table->string('paypal_email', 255);
            $table->string('bank_name', 255);
            $table->string('swift_code', 255);
            $table->string('account_name', 255);
            $table->string('account_number', 255);
            $table->string('iban', 255);
            $table->integer('country_id');
            $table->integer('city_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
