<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('completeAddress');
            $table->string('province');
            $table->string('citymun');
            $table->string('barangay');
            $table->integer('mobile');
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
        Schema::dropIfExists('shipping_address');
    }
}
