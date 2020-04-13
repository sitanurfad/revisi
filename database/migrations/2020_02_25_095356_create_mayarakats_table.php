<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMayarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            //buat kolom
            $table->char('nik',16)->unique();
            $table->increments('id_masyarakat');
            $table->string('nama', 35)->unique();
            $table->string('username',35)->unique();
            $table->string('password');
            $table->string('telp');
            $table->unsignedInteger('user_id');
             $table->foreign('user_id')
                    ->on('users') //relasi ke table mana
                    ->references('id') //kolom apa yang berrelasi
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


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
        Schema::dropIfExists('mayarakat');
    }
}
