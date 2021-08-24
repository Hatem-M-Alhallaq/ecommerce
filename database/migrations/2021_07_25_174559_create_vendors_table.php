<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('display_name', 100);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('fax', 200);
            $table->string('company', 100);
            $table->text('address1');
            $table->text('address2');
            $table->boolean('status')->default(false);
            $table->string('product_status', 200);
            $table->text('about_us');
            $table->integer('country');
            $table->integer('city');
            $table->string('postal_code', 200);
            $table->string('state', 200);
            $table->string('password');
            $table->string('image');
            $table->string('payment_method', 400);
            $table->string('bank_name', 400);
            $table->string('branch_number', 400);
            $table->string('swift_code', 400);
            $table->string('account_name', 400);
            $table->string('iban_number', 200);
            $table->string('bank_country', 400);
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
        Schema::dropIfExists('vendors');
    }
}
