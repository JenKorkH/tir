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
        Schema::create('guns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('caliber')->default('');
            $table->string('clip')->default('');
            $table->float('weight_bullet')->default(0);
            $table->float('weight_wo_bullet')->default(0);
            $table->float('width')->default(0);
            $table->float('height')->default(0);
            $table->float('barrel_length')->default(0);
            $table->float('barrel_cutting')->default(0);
            $table->text('about');
            $table->boolean('state')->default(true);
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
        Schema::dropIfExists('guns');
    }
};
