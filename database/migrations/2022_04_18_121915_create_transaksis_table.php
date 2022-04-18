<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->smallInteger('product_id');
            $table->string('title_my');
            $table->string('title_en');
            $table->smallInteger('year');
            $table->smallInteger('january');
            $table->smallInteger('february');
            $table->smallInteger('march');
            $table->smallInteger('april');
            $table->smallInteger('may');
            $table->smallInteger('june');
            $table->smallInteger('july');
            $table->smallInteger('august');
            $table->smallInteger('september');
            $table->smallInteger('october');
            $table->smallInteger('november');
            $table->smallInteger('december');
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
        Schema::dropIfExists('transaksis');
    }
}
