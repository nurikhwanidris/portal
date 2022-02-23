<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiagamPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piagam_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrain();
            $table->string('title_my');
            $table->string('title_en');
            $table->string('filename_my');
            $table->string('filename_en');
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
        Schema::dropIfExists('piagam_pelanggans');
    }
}
