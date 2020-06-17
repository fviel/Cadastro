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
    public function up(){

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedInteger('stars');
            $table->float('price');
            $table->unsignedInteger('quantity');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['category_id']);
        });

        Schema::dropIfExists('products');
    }

    
}
