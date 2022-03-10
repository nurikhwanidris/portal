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
            $table->string('name_en')->nullable();
            $table->string('jawatan_my');
            $table->string('jawatan_en')->nullable();
            $table->string('gred_id');
            $table->string('email');
            $table->string('phone_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('photo')->nullable();
            $table->string('dept_id');
            $table->smallInteger('sort_order');
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
        Schema::dropIfExists('pegawais');
    }
}
