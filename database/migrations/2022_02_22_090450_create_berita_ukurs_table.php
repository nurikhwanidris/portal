<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaUkursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_ukurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrain();
            $table->string('title_my');
            $table->string('title_en');
            $table->string('year');
            $table->string('gambarHadapan');
            $table->string('filename');
            $table->smallInteger('status_id');
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
        Schema::dropIfExists('berita_ukurs');
    }
}
