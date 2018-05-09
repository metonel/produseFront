<?php

use Faker\Generator as Faker;

$factory->define(App\Produse::class, function (Faker $faker) {
    return [
        'titlu' => $faker->text(50),
        'descriere' => $faker->text(200)
    ];
});
