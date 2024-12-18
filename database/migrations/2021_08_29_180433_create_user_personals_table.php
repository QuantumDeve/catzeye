<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', array('0','1','2'))->default('0');
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
        Schema::dropIfExists('user_personals');
    }
}
