<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '32');
            $table->string('detail', '500');

            //以下外部キーレコード
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->bigInteger('paystatus_id')->unsigned();
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();
            $table->integer('price');
            $table->string('imgpath', '200');
            $table->timestamps();

            //外部キー制約の設定
            //出品者
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            // その他
            $table->foreign('category_id')
                ->references('id')
                ->on('categorys');
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');
            $table->foreign('paystatus_id')
                ->references('id')
                ->on('paystatuses');
            $table->foreign('area_id')
                ->references('id')
                ->on('areas');
            $table->foreign('day_id')
                ->references('id')
                ->on('days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells');
    }
}
