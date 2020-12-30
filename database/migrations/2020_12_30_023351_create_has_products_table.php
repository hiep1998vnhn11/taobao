<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_id');
            $table->unsignedInteger('product_id');
            $table->integer('amount');
            $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');
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
        Schema::dropIfExists('has_products');
    }
}
