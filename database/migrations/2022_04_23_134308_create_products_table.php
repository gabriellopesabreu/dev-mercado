<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->unsignedDouble('price')->default(0);
            $table->longText('description')->nullable();
            $table->string('color',45)->nullable();
            $table->unsignedDouble('quantity')->default(0);
            $table->unsignedDouble('height')->default(0);
            $table->unsignedDouble('width')->default(0);
            $table->unsignedDouble('depth')->default(0);
            $table->unsignedDouble('weight')->default(0);
            $table->unsignedInteger('category_id');
            $table->boolean('active')->default(true);
            $table->string('bulk_slug',2);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('bulk_slug')->references('slug')->on('bulks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
