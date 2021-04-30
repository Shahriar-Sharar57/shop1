<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->bigIncrements('conus_id');
            $table->string('conus_name',50)->nullable();
            $table->string('conus_phone',20)->nullable();
            $table->string('conus_email',40)->nullable();
            $table->string('conus_subject',190)->nullable();
            $table->text('conus_message')->nullable();
            $table->string('conus_slug',50);
            $table->integer('conus_status')->default(1);
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
        Schema::dropIfExists('contactuses');
    }
}
