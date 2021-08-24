<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdactCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodact_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description', 400);
            $table->integer('product_id');
            $table->text('image')->nullable();
            $table->text('icon')->nullable();
            $table->string('meta_tags', 400);
            $table->string('meta_description', 400);
            $table->string('keywords', 400);
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
        Schema::dropIfExists('prodact_categories');
    }
}
