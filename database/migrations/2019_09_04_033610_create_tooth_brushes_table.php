<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToothBrushesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tooth_brushes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('toothbrush_id')->references('id')->on('tooth_brushes');
        });
        Schema::table('brushes', function (Blueprint $table) {
            $table->foreign('toothbrush_id')->references('id')->on('tooth_brushes');
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tooth_brushes');
    }
}
