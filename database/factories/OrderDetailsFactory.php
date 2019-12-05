<?php

/** @var Factory $factory */

use App\OrderDetails;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(OrderDetails::class, static function (Faker $faker) {
    return [
        'order_id' => factory(App\Order::class),
        'product_id' => factory(App\Product::class),
        'quantity' => random_int(1, 5),
    ];
});
