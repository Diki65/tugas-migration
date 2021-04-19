<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->char('npm', 10)->index();
            $table->char('semeseter', 5)->index();
            $table->string('tahun_ajaran', 10)->index();
            $table->timestamps();


            $table->foreign('npm')
                ->references('npm')
                ->on('mahasiswa')
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
        Schema::dropIfExists('frs');
    }
}
