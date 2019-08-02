<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建订单表 order 要创建的表名
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('order_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //数据表删除
        Schema::drop('order');
    }
}
