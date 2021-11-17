<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypePivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types_pivots', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('type_id');
            
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade'); 
            $table->foreign('type_id')
                    ->references('id')
                    ->on('product_types')
                    ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type_pivots');
    }
}
