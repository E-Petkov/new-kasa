<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ym;
use Faker\Generator as Faker;

$factory->define(Ym::class, function (Faker $faker) {
    return [
        'coffee_rent' => 50,
        'coffee_elect' => rand(2000,3000)/100,
        'stair_elect' => rand(3000,4000)/100,
        'cleaning' => 60,
        'cashier' =>21,
        'elevator_tech'=>55,
        'elevator_elect'=>rand(2500,3500)/100,
        'big_apt'=>4,
        'small_apt'=>3,
        'rent_1'=>2,
        'rent_2'=>3,
        'rent_3'=>4,
        'members_total'=>45,
        'pets_total'=>5,
        'members_elevator'=>38,
        'pets_elevator'=>2,
        'message'=>'Този месец е тестов, ингнорирайте данните от него!'
    ];
});
