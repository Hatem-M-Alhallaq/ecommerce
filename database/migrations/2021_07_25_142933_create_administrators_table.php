<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            
            $table->string('full_name', 100);
            $table->string('email')->unique();
            $table->string('mobile');
            $table->text('address');
            $table->tinyInteger('permission_id');
            $table->tinyInteger('status')->default(false);;
            // $table->boolean('status')->default(false);

            
            // $table->string('password');

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
        Schema::dropIfExists('administrators');
    }
}
