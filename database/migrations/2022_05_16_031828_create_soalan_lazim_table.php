<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalanLazimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soalan_lazims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->smallInteger('soalan_lazim_category_id')->nullable();
            $table->string('soalan', 255);
            $table->string('jawapan', 255)->nullable();
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
        Schema::dropIfExists('soalan_lazims');
    }
}
