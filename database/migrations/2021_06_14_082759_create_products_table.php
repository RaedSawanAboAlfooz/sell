<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name') ;
            $table->text('description')  ;
            $table->bigInteger('category_id') ;
            $table->bigInteger('coin_id') ;
            $table->bigInteger('count_like')->nullable()->default(0);
            $table->double('price') ;
            $table->string('address') ->nullable();
            $table->string('location') ->nullable();
            $table->boolean('status_sell')->nullable()->default(0);
            $table->bigInteger('user_id') ;
            $table->integer('city_id') ;
            $table->boolean('accept')->nullable()->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
