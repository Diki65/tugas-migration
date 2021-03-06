<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->char('npm', 10)->index();
            $table->char('kelas', 2)->index();
            $table->char('nidn', 10)->index();
            $table->year('tahun_masuk', 4)->index();
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
        Schema::dropIfExists('mahasiswa');
    }
}
