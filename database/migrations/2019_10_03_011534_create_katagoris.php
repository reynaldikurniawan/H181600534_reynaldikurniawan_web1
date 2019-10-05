<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatagoris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katagoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('keterangan');
            $table->unsignedBiginteger('user_id');
            $table->timestamps('');
            $table->foreign('nama')->refrences('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katagoris');
    }
}
