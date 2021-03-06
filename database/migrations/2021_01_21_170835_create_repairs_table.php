<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->bigInteger('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('serial_number');
            $table->date('picked_up')->nullable();
            $table->text('description')->nullable();
            $table->text('repair_details')->nullable();
            $table->text('comments')->nullable();
            $table->integer('price');
            $table->bigInteger('identifier')->unsigned();
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
        Schema::dropIfExists('repair');
    }
}
