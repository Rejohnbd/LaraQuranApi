<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuraInfoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sura_info_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sura_id');
            $table->string('ayah_no');
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
        Schema::dropIfExists('sura_info_details');
    }
}
