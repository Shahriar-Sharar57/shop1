<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->integer('mpc_id');
            $table->integer('pc_id');
            $table->integer('product_in_feature')->default(0);
            $table->integer('product_main_price');
            $table->integer('product_discount');
            $table->integer('product_price');
            $table->integer('product_quanity');
            $table->text('product_short_description')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_feature')->nullable();
            $table->string('product_tags')->nullable();
            $table->string('product_image',50)->nullable();
            $table->string('product_image2',50)->nullable();
            $table->string('product_image3',50)->nullable();
            $table->string('product_code')->unique();
            $table->string('product_slug');
            $table->integer('product_creator');
            $table->integer('product_status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
