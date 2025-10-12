<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission_references', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('reference_email')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('start_date')->nullable();
            $table->string('start_month')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_date')->nullable();
            $table->string('end_month')->nullable();
            $table->string('end_year')->nullable();
            $table->string('Punctuality_and_Attendance')->nullable();
            $table->string('Reliability')->nullable();
            $table->string('Relationship_with_Colleagues')->nullable();
            $table->string('Overall_Contribution')->nullable();
            $table->text('Safeguarding_and_Child_Protection')->nullable();
            $table->text('concerns_about_children')->nullable();
            $table->string('re_employ')->nullable();
            $table->string('accept_status')->nullable();
            $table->text('decline_text')->nullable();
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
        Schema::dropIfExists('submission_references');
    }
}
