<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->useCurrent();
            $table->enum('status', ['pending', 'approved', 'complete', 'cancelled'])->default('pending');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_info_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_info_id')->references('id')->on('order_infos');
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
        Schema::dropIfExists('orders');
    }
}
