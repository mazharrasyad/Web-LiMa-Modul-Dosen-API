<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprint', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('project');             
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->enum('status', ['Belum', 'Proses', 'Selesai'])->default('Belum');
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
        Schema::dropIfExists('sprint');
    }
}
