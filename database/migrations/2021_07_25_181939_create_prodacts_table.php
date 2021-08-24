<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('details');
            $table->text('image')->nullable();
            $table->string('meta_tags', 400);
            $table->string('meta_description', 400);
            $table->string('product_tags', 400);
            $table->integer('category_id');
            $table->string('sku', 400);
            $table->string('upc', 400);
            $table->string('EAN', 400);
            $table->string('JAN', 400);
            $table->string('MPN', 400);
            $table->string('country');
            $table->string('city');
            $table->string('tax', 400);
            $table->string('minimum_qnty', 400);
            $table->string('stock_status', 400);
            $table->string('requir_shipping'); //boolean
            $table->dateTime('date_available');
            $table->string('dimensions', 200);
            $table->string('lenght_class', 200);
            $table->float('weight');
            $table->float('weight_class');
            $table->string('sort_order', 200);
            $table->boolean('status')->default(false);
            $table->integer('vendor_id');
            $table->integer('store_id');
            $table->string('model', 400);
            $table->float('old_price');
            $table->float('price');
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
        Schema::dropIfExists('prodacts');
    }
}
