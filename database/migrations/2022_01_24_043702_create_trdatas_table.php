<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trdata', function (Blueprint $table) {
            $table->uuid('txtId')->unique()->primary();
            $table->foreignUuid('txtIdUser')->constrained('muser','txtId')->onDelete('cascade');
            $table->enum('txtTipe',['BIKE','RUN','WALK']);
            $table->float('floatData');
            $table->string('dtnInsertedDate');
            $table->string('txtWaktuTempuh');
            $table->float('floatSpeed')->default(0);
            $table->string('txtSLat')->nullable();
            $table->string('txtSLong')->nullable();
            $table->string('txtELat')->nullable();
            $table->string('txtELong')->nullable();
            $table->string('txtPolyline')->nullable();
            $table->integer('intLowIntenseTime')->nullable();
            $table->integer('intModerateIntenseTime')->nullable();
            $table->integer('intHighIntenseTime')->nullable();
            $table->float('floatTotal')->nullable();
            $table->float('floatAllTotal')->nullable();
            $table->integer('intDuration')->nullable();
            $table->float('floatPoint')->nullable();
            $table->string('txtPhotoPath', 2048)->nullable();
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
        Schema::dropIfExists('trdatas');
    }
}
