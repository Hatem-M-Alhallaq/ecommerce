<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name', 200);
            $table->text('description', 400);
            $table->string('shipping_policy', 400);
            $table->string('return_privacy', 300);
            $table->string('keyword', 300);
            $table->string('meta_description', 400);
            $table->string('tax_number', 300);
            $table->string('mapLngLat', 400);
            $table->string('logo', 400);
            $table->string('banner', 400);
            $table->text('about_us');
            $table->string('shipping_charges', 400);
            $table->string('category', 400);
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
        Schema::dropIfExists('vendor_stores');
    }
}
