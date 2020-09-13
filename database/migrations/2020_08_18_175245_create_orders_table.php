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
            $table->integer('user_id');


            // pick up location details
            $table->string('PickupLocation');  // add to register
            
            // delivery location details
            $table->string('DeliveryAdress');
            $table->integer('DeliveryPostCode');
            $table->string('ClientName');
            $table->string('ClientPhoneNumber');
            $table->boolean('Gift')->nullable();
            $table->string('GiftFrom')->nullable();
            
            $table->time('confirmedAt')->nullable();
            $table->time('pickedUpAt')->nullable();
            $table->time('deliveredAt')->nullable();
            
            $table->string('comment')->nullable();
            $table->integer('assigned')->nullable();

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
