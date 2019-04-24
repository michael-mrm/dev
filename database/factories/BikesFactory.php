<?php

use Faker\Generator as Faker;

$factory->define(App\bikes::class, function (Faker $faker) {
    return [        
        'owner_id'=> '10', 
        'brand'=> str_random(10),
        'model'=> str_random(10),
        'price'=> '1000.00' 
    ];
});
