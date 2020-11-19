<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('enrollment_no')->unique();;
            // $table->integer('rollno');
            $table->string('studentname');
            $table->date('dob');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->bigInteger('phone');
            $table->unsignedInteger('placement_drive_id');
            $table->foreign('placement_drive_id')->references('id')->on('placement_drives');
            $table->float('ssc');
            $table->float('hsc');
            $table->float('ug');
            $table->string('stream');
            $table->float('cpi');
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
        Schema::dropIfExists('students');
    }
}
