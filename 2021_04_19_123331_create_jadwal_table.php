<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->char('kode_matakuliah', 8)->index();
            $table->char('nidn', 10)->index();
            $table->string('hari', 15)->index();
            $table->time('jam_mulai')->index();
            $table->time('jam_selesai')->index();
            $table->timestamps();


            $table->foreign('nidn')
                ->references('nidn')
                ->on('dosen')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
