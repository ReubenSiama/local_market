<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->integer('asset_type_id')->nullable();
            $table->string('product_description')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('asset_image')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('company_shop_name')->nullable();
            $table->string('company_shop_address')->nullable();
            $table->string('company_shop_pin_code')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_number')->nullable();
            $table->enum('have_guarantee',['Yes','No'])->nullable();
            $table->string('guarantee_number_of_months')->nullable();
            $table->enum('have_warranty',['Yes','No'])->nullable();
            $table->string('warranty_number_of_months')->nullable();
            $table->enum('extended_warranty',['Yes','No'])->nullable();
            $table->string('months_of_extended_warranty')->nullable();
            $table->enum('are_we_extending',['Yes','No'])->nullable();
            $table->string('our_extended_warranty_months')->nullable();
            $table->string('invoice_image')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
