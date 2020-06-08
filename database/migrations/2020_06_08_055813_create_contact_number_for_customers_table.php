<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactNumberForCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_number_for_customers', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->string('land_line');
            $table->string('mobile');
            $table->string('whatsapp_number');
            $table->string('email');
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
        Schema::dropIfExists('contact_number_for_customers');
    }
}
