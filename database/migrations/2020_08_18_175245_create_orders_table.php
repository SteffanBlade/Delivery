<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            // pick up location details
            $table->string('PickupLocation');
            $table->time('PickupTime');

            // delivery location details
            $table->string('DeliveryAdress');
            $table->integer('DeliveryPostCode');
            $table->string('ClientName');
            $table->string('ClientPhoneNumber');
            $table->string('Gift')->nullable();
            $table->string('GiftGiver')->nullable();
            $table->time('DeliveryTime')->nullable();

            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
