<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id');
            $table->string('currency', 255);
            $table->integer('customer_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('phone', 255);
            $table->dateTime('date');
            $table->string('shipping_method', 400);
            $table->dateTime('order_date');
            $table->string('payment_method', 400);
            $table->string('shipping_address', 400);
            $table->string('sub_totle', 255);
            $table->string('shipping_amount', 255);
            $table->string('VAT', 255);
            $table->double('total');
            $table->string('affiliate_value', 255);
            $table->integer('affiliate_id');
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
        Schema::dropIfExists('orders');
    }
}
