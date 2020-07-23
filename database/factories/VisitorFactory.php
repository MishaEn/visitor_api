<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Event;
use App\Model\Visitor;
use Faker\Generator as Faker;

$factory->define(Visitor::class, function (Faker $faker) {
    $events = Event::pluck('id')->toArray();
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'event_id' => $faker->randomElement($events)
    ];
});
