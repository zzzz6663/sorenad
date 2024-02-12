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
        Schema::create('advertises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("title",256)->nullable();
            $table->string("login_link_page",500)->nullable();
            $table->string("type",20)->nullable();
            $table->string("model_price",100)->nullable();
            $table->string("limit_daily_view",100)->nullable();
            $table->string("limit_daily_click",100)->nullable();
            $table->string("device",100)->nullable();
            $table->string("banner1",100)->nullable();
            $table->string("banner2",100)->nullable();
            $table->timestamps();
        });


         Schema::create('advertise_cat', function (Blueprint $table) {
            $table->unsignedBigInteger('advertise_id');
            // $table->foreign('advertise_id')->references('id')->on('curts')->onDelete('cascade');
            $table->unsignedBigInteger('cat_id');
            // $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
            // $table->primary(['advertise_id','cat_id']);
            // $table->string('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertise_cat');
        Schema::dropIfExists('advertises');
    }
};
