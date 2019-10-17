<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    //Отошел от Factory т.к. нужны более человеческие данные для работы, а не бессмыслица.
    $value = $faker->sentence(rand(3,8),true);
    $data = [
      'value' => $value,
      'attr_group_id' => (rand(1,5) == 5) ? 1 : 2
    ];
    return $data;
});
