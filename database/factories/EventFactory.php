<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name' => $faker->realText($maxNbChars = 10, $indexSize = 2),
        'city' => $faker->city,
        'start_date' => $faker->dateTime
    ];
});
