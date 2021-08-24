<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorProboslsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_probosls', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('customer_id');
            $table->string('title', 255);
            $table->string('description', 400);
            $table->dateTime('send_date');
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
        Schema::dropIfExists('vendor_probosls');
    }
}
