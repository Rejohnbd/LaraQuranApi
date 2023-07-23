<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuraInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sura_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sura_list_id');
            $table->integer('ayah_no', false);
            $table->integer('page_no', false);
            $table->integer('jaz_no', false);
            $table->longText('arabic');
            $table->longText('english');
            $table->longText('bangla');
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
        Schema::dropIfExists('sura_infos');
    }
}
