<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $kolom) {
            $kolom->increments('id');
            $kolom->string('field name', 100);
            $kolom->char('type', 100);
            $kolom->integer('size');
            $kolom->char('description', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $chema::drop('kategori'); 
    }
}
