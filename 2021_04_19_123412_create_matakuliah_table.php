<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->char('id', 20);
            $table->integer('sks', 11)->index();
            $table->char('kode_matakuliah', 8)->index();
            $table->string('nama_matakuliah')->index();
            $table->char('kode_prodi', 5)->index();
            $table->timestamps();


            $table->foreign('kode_matakuliah')
                ->references('kode_matakuliah')
                ->on('jadwal')
                ->onUpdate('cascade');

            

            $table->foreign('kode_prodi')
                ->references('kode_prodi')
                ->on('prodi')
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
        Schema::dropIfExists('matakuliah');
    }
}
