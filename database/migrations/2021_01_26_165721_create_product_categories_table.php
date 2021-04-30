<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('pc_id');
            $table->string('pc_name',40)->unique();
            $table->integer('mpc_id');
            $table->string('pc_image',50)->nullable();
            $table->string('pc_slug',50);
            $table->integer('pc_creator');
            $table->integer('pc_status')->default(1);
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
        Schema::dropIfExists('product_categories');
    }
}
