<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakLanjutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindaklanjuts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_pelanggaran');
            $table->string('uraian_tindaklanjut');
            $table->string('filefoto_tindaklanjut');
            $table->foreignId('fk_user_tindaklanjut');

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
        Schema::dropIfExists('tindak_lanjuts');
    }
}
