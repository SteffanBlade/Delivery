<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [

        // pickup location data factory
        'PickupLocation'=>$faker->address,
        'PickupTime'=>now(),

        //delivery location data factory
        'DeliveryAdress'=>$faker->address,
        'DeliveryPostalCode'=>$faker->postcode,
        'ClientName'=>$faker->name,
        'ClientPhoneNumber'=>$faker->phoneNumber,
        'DeliveryTime'=>now(),


    ];
});
