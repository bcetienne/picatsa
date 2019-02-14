<?php

use Faker\Generator as Faker;

$factory->define(App\Vignettes::class, function (Faker $faker) {
    return [
        'legend' => $faker->realText($maxNbChars = 74, $indexSize = 1),
        'description' => $faker->realText($maxNbChars = 255, $indexSize = 1),
        'url' => $faker->imageUrl($width = 800, $height = 400, 'cats', true, 'Faker')
    ];
});
