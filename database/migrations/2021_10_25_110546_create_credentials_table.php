<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // $table->unsignedBigInteger('user_id');

            $table->string('licenses_license')->nullable();
            $table->string('licenses_state')->nullable();
            $table->date('licenses_expiration')->nullable();
            $table->integer('licenses_number')->nullable();
            $table->string('licenses_image')->nullable();
            
            $table->string('client_certification')->nullable();
            $table->string('client_expiration')->nullable();
            $table->integer('client_number')->nullable();
            // $table->string('client_image')->nullable();

            $table->string('employment_license')->nullable();
            $table->string('employment_state')->nullable();
            $table->date('employment_expiration')->nullable();
            $table->integer('employment_number')->nullable();
            // $table->string('employment_image')->nullable();

            $table->string('certifications_license')->nullable();
            $table->string('certifications_state')->nullable();
            $table->date('certifications_expiration')->nullable();
            $table->integer('certifications_number')->nullable();
            // $table->string('certifications_image')->nullable();
            
            $table->string('medical_license')->nullable();
            $table->string('medical_state')->nullable();
            $table->date('medical_expiration')->nullable();
            $table->integer('medical_number')->nullable();
            // $table->string('medical_image')->nullable();

            $table->string('training_licesnse')->nullable();
            $table->string('training_state')->nullable();
            $table->date('training_expiration')->nullable();
            $table->integer('training_number')->nullable();
            // $table->string('training_image')->nullable();

            $table->string('additional_license')->nullable();
            $table->string('additional_state')->nullable();
            $table->date('additional_expiration')->nullable();
            $table->integer('additional_number')->nullable();
            // $table->string('additional_image')->nullable();

            $table->string('background_license')->nullable();
            $table->string('background_state')->nullable();
            $table->date('background_expiration')->nullable();
            $table->integer('background_number')->nullable();
            // $table->string('background_image')->nullable();

            $table->string('hr_license')->nullable();
            $table->string('hr_state')->nullable();
            $table->date('hr_expiration')->nullable();
            $table->integer('hr_number')->nullable();
            // $table->string('hr_image')->nullable();


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
        Schema::dropIfExists('credentials');
    }
}
