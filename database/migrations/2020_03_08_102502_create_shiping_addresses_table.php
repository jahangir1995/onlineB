<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiping_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('contact');
            $table->string('address');
            $table->string('paymentoption');
            $table->integer('accountnumber');
            $table->string('transication');
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
        Schema::dropIfExists('shiping_addresses');
    }
}
