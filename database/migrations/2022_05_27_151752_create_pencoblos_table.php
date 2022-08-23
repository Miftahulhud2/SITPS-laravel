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
        Schema::create('pencoblos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tps_id');
            $table->boolean('hadir')->default(false);
            $table->string('nama');
            $table->biginteger('nik');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('umur');
            $table->string('sts_kawin');
            $table->string('jns_kelamin');
            $table->string('alamat');
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
        Schema::dropIfExists('pencoblos');
    }
};
