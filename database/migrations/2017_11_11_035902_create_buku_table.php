<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
          $table->string('id_buku')->primary();
          $table->integer('id_kategori')->unsigned();
          $table->string('isbn');
          $table->string('judul');
          $table->string('pengarang');
          $table->string('penerbit');
          $table->string('file');
          $table->timestamps();

          // foreign key constrant
          $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
