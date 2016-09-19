<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_queue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('library_id')->unsigned();
            $table
                ->foreign('library_id')
                ->references('id')
                ->on('library')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->tinyInteger('status')->comment('queue=0 take=1 back=2');
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
        Schema::drop('library_queue');
    }
}
