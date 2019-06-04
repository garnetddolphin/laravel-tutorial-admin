<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    // 削除する
    DB::table('customers')->delete();
    $clients = App\Client::pluck('id')->toArray();
    return [
        'client_id' => $faker->randomElement($clients),
        'country' => $faker->country(),                         // 国名
        'postcode' => $faker->postcode(),                       // 郵便番号
        'prefecture' => $faker->prefecture(),                   // 都道府県
        'city' => $faker->city(),                               // 市
        'ward' => $faker->ward(),                               // 区
        'streetAddress' => $faker->streetAddress(),             // 町以下
        'secondaryAddress' => $faker->secondaryAddress(),       // マンション名
        'company' => $faker->company(),                         // 会社名
        'userName' => $faker->userName(),                       // ユーザ名
        'domainName' => $faker->domainName(),                   // ドメイン名
        'email' => $faker->email(),                             // メールアドレス
        'lastName' => $faker->lastName(),                       // 姓
        'firstName' => $faker->firstName(),                     // 名
        'lastKanaName' => $faker->lastKanaName(),               // 姓カナ
        'firstKanaName' => $faker->firstKanaName(),             // 名カナ
        'phoneNumber' => $faker->phoneNumber(),                 // 電話番号
        'realText' => $faker->realText(),                       // 日本語文章
    ];
});