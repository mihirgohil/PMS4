<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship__posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('co_details');
            $table->longText('overview');
            $table->string('duration');
            $table->longText('recruitment');
            $table->string('position');
            $table->string('modeofinterview');
            $table->string('workinghours');
            $table->string('stipend');
            $table->string('ctc');
            $table->longText('bond');
            $table->boolean('is_posted');
            $table->boolean('is_completed');
            $table->boolean('is_active_registration');
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedInteger('placement_drive_id');
            $table->foreign('placement_drive_id')->references('id')->on('placement_drives');
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
        Schema::dropIfExists('internship__posts');
    }
}
