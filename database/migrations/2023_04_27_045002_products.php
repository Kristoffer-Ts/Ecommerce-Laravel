<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function(Blueprint $table)
        {
            $table->id('id_product');
            $table->string('nama_barang');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('harga');
            $table->integer('stock');
            $table->string('status_product');
            $table->string('description');
            $table->string('photo_path')->nullable();
            
            //add foreign key to id on table users
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
