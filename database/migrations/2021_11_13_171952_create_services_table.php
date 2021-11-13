<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id'); 
            $table->unsignedInteger('user_id'); 
            $table->unsignedInteger('product_costs_id');
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade'); 

            $table->foreign('user_id')
                    ->references('id') 
                    ->on('users')
                    ->onDelete('cascade'); 
                    
            $table->foreign('product_costs_id')
                    ->references('id')   
                    ->on('product_costs')             
                    ->onDelete('cascade');    
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
        Schema::dropIfExists('services');
    }
}
