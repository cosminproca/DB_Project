<?php

/** @var Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, static function (Faker $faker) {
    return [
        'product_id_no' => $faker->word,
        'product_name' => $faker->name,
        'category_id' => factory(App\Category::class),
        'purchase_price' => round(random_int(50, 500) / 10, 2),
        'sell_price' => round(random_int(50, 500) / 10, 2),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
