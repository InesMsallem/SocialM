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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('page_id'); 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('page_id')->references('id')->on('pages');
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
};
