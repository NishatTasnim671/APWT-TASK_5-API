<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverinfos', function (Blueprint $table) {
            $table->id();
            $table->string('P_name',101);

            $table->unsignedBigInteger('O_id');

            $table->foreign('O_id')->references('id')->on('myorders');

            $table->string('Pay_price',50);

            $table->string('D_username',50);

            $table->string('D_Status',50);

            $table->string('D_time',150);

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
        Schema::dropIfExists('deliverinfos');
    }
}
