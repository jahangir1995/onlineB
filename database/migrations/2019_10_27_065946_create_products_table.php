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
            $table->bigIncrements('id');
            $table->integer('category_id')->unsingned();
            $table->integer('brand_id')->unsingned();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('slug')->unique();
            $table->integer('quentity')->default(1);
            $table->tinyinteger('status')->dafault(0);
            $table->integer('price');
            $table->integer('offer_price')->nullable();
            $table->integer('admin_id');
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
