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
            $table->string('productName');
            $table->float('price');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->longText('description')->nullable();
            $table->integer('quantity');
            $table->string('type')->nullable();
            $table->timestamps();
        });

        Schema::table('products', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
