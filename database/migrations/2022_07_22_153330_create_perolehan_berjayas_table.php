<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerolehanBerjayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perolehan_berjayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->smallInteger('jenis_perolehan');
            $table->text('tajuk_perolehan');
            $table->string('nama_syarikat', 100);
            $table->integer('nilai_perolehan');
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
        Schema::dropIfExists('perolehan_berjayas');
    }
}
