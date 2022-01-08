<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->string('name')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->integer('product_tax')->nullable();
            $table->string('image')->nullable();
            $table->integer('alert_qty')->nullable();
            $table->longText('details')->nullable();
            $table->integer('qty')->nullable();
            $table->string('status')->default(0);

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
        Schema::dropIfExists('products');
    }
}
