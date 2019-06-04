<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('client_id');
        $table->string('country')->nullable(true);              // 国名
        $table->string('postcode')->nullable(true);             // 郵便番号
        $table->string('prefecture')->nullable(true);           // 都道府県
        $table->string('city')->nullable(true);                 // 市
        $table->string('ward')->nullable(true);                 // 区
        $table->string('streetAddress')->nullable(true);        // 町以下
        $table->string('secondaryAddress')->nullable(true);     // マンション名
        $table->string('company')->nullable(true);              // 会社名
        $table->string('userName')->nullable(true);             // ユーザ名
        $table->string('domainName')->nullable(true);           // ドメイン名
        $table->string('email')->nullable(true);                // メールアドレス
        $table->string('lastName')->nullable(true);             // 姓
        $table->string('firstName')->nullable(true);            // 名
        $table->string('lastKanaName')->nullable(true);         // 姓カナ
        $table->string('firstKanaName')->nullable(true);        // 名カナ
        $table->string('phoneNumber')->nullable(true);          // 電話番号
        $table->string('realText')->nullable(true);             // 日本語文章
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
        Schema::dropIfExists('customers');
    }
}
