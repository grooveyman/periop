<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("candidates_id");
            $table->unsignedBigInteger("portfolios_id");
            $table->unsignedBigInteger("voters_id");
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates');
            $table->foreign('portfolios_id')->references('id')->on('portfolios');
            $table->foreign('voters_id')->references('id')->on('voters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
