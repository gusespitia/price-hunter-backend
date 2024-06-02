<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('combo_id');
            $table->string('data', 255);
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('scraping_products_id');
            $table->timestamps();

            $table->foreign('scraping_products_id')->references('id')->on('scraping_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
