<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonalDetailsNewColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_personals', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->dateTime('date')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('work_details')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
