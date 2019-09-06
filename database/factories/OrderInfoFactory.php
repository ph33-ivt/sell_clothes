<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderInfo;
use App\User;
use App\City;
use Faker\Generator as Faker;

$factory->define(OrderInfo::class, function (Faker $faker) {
    $userIds     = User::pluck('id');
    $cityIds     = City::pluck('id');
    $city_id     = $faker->randomElement($cityIds);
    $district_id = $faker->randomElement(City::where('id', $city_id)->first()->districts->pluck('id'));

    return [
        'first_name'  => $faker->firstName(),
        'last_name'   => $faker->lastName(),
        'phone'       => '0' . $faker->randomNumber(9, true),
        'address'     => $faker->address,
        'user_id'     => $faker->randomElement($userIds),
        'city_id'     => $city_id,
        'district_id' => $district_id,
    ];
});
