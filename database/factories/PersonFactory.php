<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define( \App\Person::class, function (Faker $faker){
  return [
    "first_name"=>$faker->text(10),
    "last_name"=>$faker->text(10),
    "middle_name"=>$faker->text(10)
  ];
});