<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mname');
            $table->string('lname');
            $table->date('birthday');
            $table->text('about');
            $table->string('email', 64)->unique();
            $table->string('phone', 64)->unique();
            $table->string('skype', 64);
            $table->string('vk', 64);
            $table->string('fb', 64);
            $table->string('in', 64);
            $table->dateTime('registration');
            $table->dateTime('last_login');
            $table->string('password');
            $table->integer('office')->unsigned();
            $table
                ->foreign('office')
                ->references('id')
                ->on('offices')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('departament')->unsigned();
            $table
                ->foreign('departament')
                ->references('id')
                ->on('departaments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('role')->unsigned();
            $table
                ->foreign('role')
                ->references('id')
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->tinyInteger('activated')->comment('activated=1 deactivated=0');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
