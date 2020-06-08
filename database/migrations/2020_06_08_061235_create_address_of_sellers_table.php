<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressOfSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_of_sellers', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('mama_ward_number');
            $table->string('full_address');
            $table->string('pin_code');
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
        Schema::dropIfExists('address_of_sellers');
    }
}
