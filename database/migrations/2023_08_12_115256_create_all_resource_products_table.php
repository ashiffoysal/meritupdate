<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllResourceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_resource_products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sku')->nullable();
            $table->float('price')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->longText('description')->nullable();
            $table->integer('levels')->nullable();
            $table->string('purchase_link')->nullable();
            $table->text('tags')->nullable();
            $table->longText('pdf')->nullable();
            $table->longText('thumbnail_image')->nullable();
            $table->integer('is_deleted')->default(0);
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('all_resource_products');
    }
}
