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
            $table->string('product_name');
            $table->string('product_desc');
            $table->string('image')->nullable();
            $table->string('price');
            $table->string('old_price')->nullable();
            $table->timestamps();
            
            //For using foreign key any one of below can be used 
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories_id');

            $table->foreignId('category_id')->constrained('categories', 'id');
           
           
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
