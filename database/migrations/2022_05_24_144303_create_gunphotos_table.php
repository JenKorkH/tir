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
        Schema::create('gunphotos', function (Blueprint $table) {
            $table->unsignedBigInteger('gun_id');
            $table->foreign('gun_id')->references('id')->on('guns')->onDelete('cascade');
            $table->string('photo')->default('');
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
        Schema::dropIfExists('gunphotos');
    }
};
