<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apt;
use Faker\Generator as Faker;

$factory->define(Apt::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'members' => rand(1,5),
        'pets' => rand(0,1),
        'acc_balance' => rand(-1000,2000)/100,
        'is_big_apt' =>rand(0,1),
        'is_rent_1'=>rand(0,1),
        'is_rent_2'=>rand(0,1),
        'is_rent_3'=>rand(0,1),
        'is_pay_elevator'=>rand(0,1),
        'is_cashier'=>0,
    ];
});
