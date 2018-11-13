<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktimes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('karyawan_id');
            $table->date('tgl');
            $table->float('hmin'); 
            $table->float('hmout'); 
            $table->float('totalhm');
            $table->time('in');
            $table->time('out');
            $table->integer('rest');
            $table->integer('totaljk');
            $table->integer('lambat');
            $table->integer('ot');
            $table->unsignedInteger('remark_id');
            $table->unsignedInteger('shift_id');
            $table->timestamps();
            $table->foreign('karyawan_id')->references('id')->on('karyawans');
            $table->foreign('remark_id')->references('id')->on('remarks');
            $table->foreign('shift_id')->references('id')->on('shifts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
