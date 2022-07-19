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
        Schema::create('orders_items', function (Blueprint $table) {
            //$table->unsignedInteger('seq')->primary();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->unsignedDouble('quantity')->default(0);
            $table->unsignedDouble('value')->default(0);
            //$table->unsignedDouble('discount')->default(0);
            //$table->unsignedDouble('perc_discount')->default(0);;
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');

            $table->primary('order_id', 'product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_items');
    }
};
