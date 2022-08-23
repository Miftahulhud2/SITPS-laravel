<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tps');
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suara_id');
            $table->foreignId('pencoblos_id');
            $table->string('namatps');
            $table->string('slug');
            $table->string('tmp_tps');
            $table->string('kt_anggota');
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
        Schema::dropIfExists('tps');
    }
};
