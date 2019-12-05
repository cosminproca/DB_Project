<?php

/** @var Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Order::class, static function (Faker $faker) {
    return [
        'order_no' => $faker->word,
        'user_id' => random_int(1, 20),
        'issue_date' => $faker->date(),
        'is_deliver' => $faker->boolean,
        'delivery_date' => $faker->date(),
    ];
}); 
