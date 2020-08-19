<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [

        // pickup location data factory
        'PickupLocation'=>$faker->address,
        'PickupTime'=>now(),
        'OrderNumber'=>Str::random(3),

        //delivery location data factory
        'DeliveryAdress'=>$faker->address,
        'DeliveryPostalCode'=>$faker->postcode,
        'ClientName'=>$faker->name,
        'ClientPhoneNumber'=>$faker->phoneNumber,
        'DeliveryTime'=>now(),


    ];
});


// // pick up location details
// $table->string('PickupLocation');
// $table->time('PickupTime');
// $table->string('OrderNumber');

// // delivery location details
// $table->string('DeliveryAdress');
// $table->integer('DeliveryPostalCode');
// $table->string('ClientName');
// $table->string('ClientPhoneNumber');
// $table->string('Gift')->nullable();
// $table->time('DeliveryTime')->nullable();