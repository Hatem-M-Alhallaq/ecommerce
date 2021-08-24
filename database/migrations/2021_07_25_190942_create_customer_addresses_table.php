<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('state', 255);
            $table->text('address1');
            $table->text('address2');
            $table->string('zip_code', 255);
            $table->string('name', 255);
            $table->string('lat', 255);
            $table->string('lng', 255);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('customer_addresses');
    }
}
