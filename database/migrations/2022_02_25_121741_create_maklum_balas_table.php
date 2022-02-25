<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaklumBalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklum_balas', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('typeOfQuestion');
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('title_my');
            $table->text('content');
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
        Schema::dropIfExists('maklum_balas');
    }
}
