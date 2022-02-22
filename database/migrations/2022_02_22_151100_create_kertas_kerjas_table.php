<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKertasKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kertas_kerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrain();
            $table->string('title_my');
            $table->string('title_en');
            $table->string('presentedBy');
            $table->string('filename');
            $table->date('date');
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
        Schema::dropIfExists('kertas_kerjas');
    }
}
