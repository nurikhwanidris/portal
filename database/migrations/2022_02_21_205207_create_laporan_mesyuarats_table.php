<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanMesyuaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_mesyuarats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contstrain();
            $table->string('title_my');
            $table->string('title_en');
            $table->string('filename');
            $table->smallInteger('status_id');
            $table->date('date');
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
        Schema::dropIfExists('laporan_mesyuarats');
    }
}
