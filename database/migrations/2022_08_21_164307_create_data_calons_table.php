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
        Schema::create('data_calons', function (Blueprint $table) {
            $table->id();
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('nm_calon1');
            $table->string('nm_w_calon1');
            $table->string('nm_calon2');
            $table->string('nm_w_calon2');
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
        Schema::dropIfExists('data_calons');
    }
};
