<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyMajorUniversityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_major_university', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('faculty_university_id')->unsigned();
            $table->bigInteger('major_id')->unsigned();
            $table->string('en_title_condition');
            $table->string('ar_title_condition');
            $table->string('en_text_condition');
            $table->string('ar_text_condition');
            $table->string('en_title_document');
            $table->string('ar_title_document');
            $table->string('en_text_document');
            $table->string('ar_text_document');
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
        Schema::dropIfExists('faculty_major_university');
    }
}
