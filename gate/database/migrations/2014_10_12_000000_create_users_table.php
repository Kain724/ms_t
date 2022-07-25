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
            $table->string('dateBirth')->nullable();
            $table->string('personalPhoneNumber')->nullable();
            $table->string('actualRegAddress')->nullable();
            $table->string('iDNumber')->unique()->nullable();
            $table->string('passportNumber')->unique()->nullable();
            $table->string('DocIssueDate')->nullable();
            $table->string('expirDate')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('marital')->nullable();
            $table->string('workPhoneNumber')->nullable();
            $table->string('personalEmail')->nullable();
            $table->string('regAddress')->nullable();
            $table->string('file')->nullable();


            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();


        });
    }

// // userRole: role,
//     name: '',
//     surname: '',
//     dateBirth: '',
//     personalPhoneNumber: '',
//     actualRegAddress: '',
//     iDNumber: '',
//     passportNumber: '',
//     DocIssueDate: '',
//     expirDate: '',
//     gender: '',
//     citizenship: '',
//     marital: '',
//     file: '',
//     workPhoneNumber: '',
//     personalEmail: '',
//     workEmail: '',
//     regAddress: ''

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
