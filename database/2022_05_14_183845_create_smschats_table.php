<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmschatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smschats', function (Blueprint $table) {
            $table->id();
            $table->string('sender_id')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('type')->nullable();

            $table->string('outgoing_id')->nullable();
            $table->string('incomming_id')->nullable();
            $table->string('message')->nullable();
            $table->integer('is_seen')->default(0);
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
        Schema::dropIfExists('smschats');
    }
}
