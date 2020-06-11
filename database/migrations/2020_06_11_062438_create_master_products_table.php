<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_products', function (Blueprint $table) {
            $table->id();
            $table->integer('main_category_id');
            $table->string('sub_category');
            $table->string('category_description');
            $table->string('brand_name')->nullable();
            $table->string('product_name');
            $table->text('product_description');
            $table->text('nutrition');
            $table->text('allergens');
            $table->text('ingredients');
            $table->text('product_barcode');
            $table->integer('product_segment_id');
            $table->enum('organic_product',['Yes','No'])->default('No');
            $table->string('product_weight')->nullable();
            $table->string('product_packing')->nullable();
            $table->text('product_pictures');
            $table->integer('unit_id');
            $table->string('unit_description')->nullable();
            $table->string('unit_mrp');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('master_products');
    }
}
