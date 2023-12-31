<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuraListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sura_lists', function (Blueprint $table) {
            $table->id();
            $table->string('arabic_name');
            $table->integer('total_ayahs', false);
            $table->string('english_name');
            $table->string('english_ayahs_count');
            $table->string('bangla_name');
            $table->string('bangla_ayahs_count');
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
        Schema::dropIfExists('sura_lists');
    }
}
