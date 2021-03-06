<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateEntitiesTable
 */

class CreateEntitiesTable extends Migration
{
    /**
     *
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('company')->nullable();
            $table->string('first_name', 32);
            $table->string('last_name', 32)->nullable();
            $table->softDeletes();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities');
    }
}
