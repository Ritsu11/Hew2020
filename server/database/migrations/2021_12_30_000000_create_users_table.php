<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64)->unique();

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname_kana')->nullable();
            $table->string('lastname_kana')->nullable();
            $table->string('postal_code')->nullable();

            $table->bigInteger('area_id')->unsigned()->nullable();
            $table->string('city')->nullable();
            $table->string('city_address')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->timeTz('withdrawal_at')->nullable()->change();

            //外部キー制約の設定
            $table->foreign('area_id')
                ->references('id')
                ->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
