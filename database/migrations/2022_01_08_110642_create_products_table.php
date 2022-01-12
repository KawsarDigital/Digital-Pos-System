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
            $table->string('name')->nullable();
            $table->integer('code')->unique();
            $table->integer('cost')->nullable();
            $table->integer('price')->nullable();
            $table->integer('product_tax')->nullable();
            $table->string('image')->nullable();
            $table->integer('alert_qty')->nullable();
            $table->longText('details')->nullable();
            $table->integer('qty')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('groups')->onDelete('CASCADE');

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('CASCADE');
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
