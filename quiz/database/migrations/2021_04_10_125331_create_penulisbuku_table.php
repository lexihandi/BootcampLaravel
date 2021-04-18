<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisbukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penulisbuku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('penulis_id');
            $table->foreign('penulis_id')
                ->references('id')->on('penulis')
                ->onDelete('cascade');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')
                ->references('id')->on('buku')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penulisbuku');
    }
}
