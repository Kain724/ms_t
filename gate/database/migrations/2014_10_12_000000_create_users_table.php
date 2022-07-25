<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();

            $table->string('userRole')->default('employee');
            $table->string('name');
            $table->string('surname')->nullable();

            $table->string('workEmail')->unique();
            $table->string('personalEmail')->nullable();

            $table->integer('dateBirth')->unsigned()->nullable();
            $table->integer('personalPhoneNumber')->unsigned()->nullable();
            $table->integer('workPhoneNumber')->unsigned()->nullable();

            $table->string('actualRegAddress')->nullable();
            $table->string('regAddress')->nullable();

            $table->string('file')->nullable();
            $table->string('iDNumber')->unique()->nullable();
            $table->string('passportNumber')->unique()->nullable();
            $table->integer('DocIssueDate')->unsigned()->nullable();
            $table->integer('expirDate')->unsigned()->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('marital')->nullable();

            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();


        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
