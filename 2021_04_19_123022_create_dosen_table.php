<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->char('nidn', 10)->index();
            $table->string('nama', 50)->index();
            $table->char('kode_prodi', 5)->index();
            $table->timestamps();

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
        Schema::dropIfExists('dosen');
    }
}
