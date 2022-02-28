<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('name_my');
            $table->string('name_en');
            $table->string('jawatan_my');
            $table->string('jawatan_en');
            $table->string('gred_id');
            $table->string('email');
            $table->string('phone_no');
            $table->string('fax_no');
            $table->string('photo');
            $table->string('dept_id');
            $table->string('sort_order');
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
        Schema::dropIfExists('pegawais');
    }
}
