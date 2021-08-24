<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdactPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodact_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('quantity_from', 255);
            $table->string('quantity_to', 255);
            $table->float('old_price');
            $table->float('price');
            $table->string('reward_points', 255);
            $table->string('quantity_type', 255);
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
        Schema::dropIfExists('prodact_prices');
    }
}
