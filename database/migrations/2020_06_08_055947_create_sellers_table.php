<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_seller');
            $table->string('name_as_on_license');
            $table->integer('license_type_id');
            $table->integer('business_type_id');
            $table->date('establishment_date');
            $table->string('nearest_landmark');
            $table->string('working_time');
            $table->string('working_dates');
            $table->string('license_number');
            $table->string('license_copy');
            $table->string('gst_number');
            $table->string('gst_copy');
            $table->string('pan_number');
            $table->string('pan_copy');
            $table->string('shop_and_establishment_license_no');
            $table->string('shop_and_establishment_license_copy');
            $table->text('detail_report');
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
        Schema::dropIfExists('sellers');
    }
}
