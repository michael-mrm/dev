<?php

use Faker\Generator as Faker;

$factory->define(App\Parts::class, function (Faker $faker) {
    return [
        'bikes_id' => 13,
        'description'=> str_random(10),
        'completed'=> false
    ];
});
