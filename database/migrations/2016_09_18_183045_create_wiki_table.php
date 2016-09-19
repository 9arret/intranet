<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('alias', 64)->unique();
            $table->integer('category_id')->unsigned();
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('category_wiki')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->mediumText('content');
            $table->dateTime('date');
            $table->integer('author')->unsigned();
            $table
                ->foreign('author')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->tinyInteger('status')->comment('published=1 unpublished=0');
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
        Schema::drop('wiki');
    }
}
