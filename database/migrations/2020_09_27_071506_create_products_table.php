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

            $table->string('name');
            $table->string('slug')->unique();
            $table->json('image')->nullable();
            $table->string('code')->nullable();
            $table->text('stock')->default(1);

            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('featured')->default(0);

            $table->float('previous_price')->nullable();
            $table->float('price');

            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();

            $table->json('color')->nullable();
            $table->json('size')->nullable();

            $table->json('delivery_options')->nullable();

            $table->boolean('dealsofday')->default(0);
            $table->boolean('flashdeals')->default(0);

            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();

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
