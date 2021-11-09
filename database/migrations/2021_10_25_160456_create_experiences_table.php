<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // $table->unsignedBigInteger('user_id');

            $table->string('education_school')->nullable();
            $table->string('education_location')->nullable();
            $table->string('education_course')->nullable();
            $table->string('education_degree')->nullable();
            $table->date('education_graduation')->nullable();
            
            $table->string('work_facility')->nullable();
            $table->date('work_start_date')->nullable();
            $table->date('work_end_date')->nullable();
            $table->string('work_street')->nullable();
            $table->string('work_city')->nullable();
            $table->integer('work_postal')->nullable();
            $table->string('work_job')->nullable();
            $table->string('work_unit')->nullable();
            $table->string('work_unit_beds')->nullable();
            $table->string('work_patient')->nullable();
       
            // $table->string('resume_image')->nullable();

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
        Schema::dropIfExists('experiences');
    }
}
