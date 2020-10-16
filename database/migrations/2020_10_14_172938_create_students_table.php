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
            $table->bigInteger('enrolment_id');
            $table->string('name');
            $table->integer('roll_no');
            $table->date('dob');
            $table->boolean('sex');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone_no');
            $table->decimal('ssc');
            $table->decimal('hsc');
            $table->decimal('ug');
            $table->string('ug_stream');
            $table->integer('pg_current_cgpa');
            $table->integer('opt_out_id')->nullable()->default(null);
            $table->boolean('is_placed')->default(FALSE);
            $table->timestamps();
            $table->integer('placement_drive_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('email_verified')->default(FALSE);
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
