<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWikiAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki_access', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wiki_id');
            $table->integer('role');
            $table->integer('office');
            $table->integer('departament');
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
        Schema::drop('wiki_access');
    }
}
