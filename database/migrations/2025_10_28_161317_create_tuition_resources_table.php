<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuitionResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuition_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('category_id')->nullable();
            $table->string('file')->nullable();
            $table->string('is_active')->default(1);
            $table->string('is_deleted')->default(0);
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
        Schema::dropIfExists('tuition_resources');
    }
}
