<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggarans', function (Blueprint $table) {
            $table->id();

            $table->string('id_pelanggaran')->unique();
            $table->string('tgl_pelanggaran');
            $table->string('uraian_pelanggaran');
            $table->string('filefoto_pelanggaran');
            $table->foreignId('fk_desakel');
            $table->string('lat_pelanggaran');
            $table->string('lng_pelanggaran');
            $table->string('pelaku_pelanggaran');
            $table->string('bentuk_pelanggaran');
            $table->foreignId('fk_user_pelanggaran');

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
        Schema::dropIfExists('pelanggarans');
    }
}
