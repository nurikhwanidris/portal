<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title_my');
            $table->string('title_en')->nullable();
            $table->string('kod')->nullable();
            $table->string('harga')->nullable();
            $table->string('tempoh')->nullable();
            $table->string('masa')->nullable();
            $table->string('taklimat')->nullable();
            $table->string('pertanyaan')->nullable();
            $table->string('filename');
            $table->smallInteger('status_id');
            $table->dateTime('show');
            $table->dateTime('hide');
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
        Schema::dropIfExists('tenders');
    }
}
