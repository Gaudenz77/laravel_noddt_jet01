<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Assuming 'users' is the name of your users table
            $table->string('title');
            $table->text('description');
            $table->string('article_number');
            $table->decimal('price', 10, 2); // Two decimals
            $table->integer('instock');
            $table->text('commentary')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}