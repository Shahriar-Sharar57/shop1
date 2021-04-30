<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_product_categories', function (Blueprint $table) {
            $table->bigIncrements('mpc_id');
            $table->string('mpc_name',40)->unique();
            $table->string('mpc_image',50)->nullable();
            $table->string('mpc_slug',50);
            $table->integer('mpc_creator');
            $table->integer('mpc_status')->default(1);
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
        Schema::dropIfExists('main_product_categories');
    }
}
