<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_partners', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->string('name_of_the_owner');
            $table->string('mobile_number');
            $table->string('whatsapp_number');
            $table->string('email_id');
            $table->string('aadhar_card_no');
            $table->string('aadhar_card_image');
            $table->string('pan_card_no');
            $table->string('pan_card_image');
            $table->string('passport_size_photo');
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
        Schema::dropIfExists('business_partners');
    }
}
