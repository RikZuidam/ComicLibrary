<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->text('pdf_file');
            $table->string('name');
            $table->text('info');
            $table->string('image');
            $table->string('author')->nullable();
            $table->decimal('price', 5, 2);
            $table->integer('category_id')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('sales')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('product');
    }
}
