<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Quill\Survey\Models\Survey;
use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    return [
    	'type' => $faker->text(5),
    	'title' => $faker->text(50),
    	'blurb' => $faker->text(50),
    	'og_title' => $faker->text(50),
    	'og_description' => $faker->text(50),
    	'status' => $faker->numberBetween(0, 1),
        //
    ];
});

