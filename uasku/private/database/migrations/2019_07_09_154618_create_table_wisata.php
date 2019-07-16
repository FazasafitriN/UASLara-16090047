<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tujuan_wisata', 50);
            $table->string('jenis_trip', 10);
            $table->date('tanggal');
            $table->string('alamat');
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
        Schema::dropIfExists('wisata_tbl');
    }
}
