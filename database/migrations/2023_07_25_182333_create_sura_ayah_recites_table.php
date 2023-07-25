<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuraAyahRecitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sura_ayah_recites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sura_list_id');
            $table->unsignedBigInteger('reciter_id');
            $table->integer('ayah_id');
            $table->string('audio');
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
        Schema::dropIfExists('sura_ayah_recites');
    }
}
