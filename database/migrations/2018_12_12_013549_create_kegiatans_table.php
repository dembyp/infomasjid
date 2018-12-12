<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('pengisi_acara');
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_berakhir');
            $table->string('contact');            
            $table->unsignedInteger('masjid_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            $table->foreign('masjid_id')
                    ->references('id')
                    ->on('masjids');
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
        Schema::dropIfExists('kegiatans');
    }
}
