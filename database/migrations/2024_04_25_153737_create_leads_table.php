<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('leads', function (Blueprint $table) {
    $table->id();
    $table->string('first_name');
    $table->string('last_name');
    $table->string('address');
    $table->string('city');
    $table->string('state');
    $table->string('zip');
    $table->string('email');
    $table->string('phone');


    
    $table->unsignedBigInteger('client_id');
    $table->unsignedBigInteger('category_id');
    $table->string('status')->default('new');
    // Add other lead fields as needed
    $table->timestamps();

    $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
//    $table->foreign('category_id')->references('id')->on('lead_categories')->onDelete('cascade');
//    $table->unsignedBigInteger('category_id');
$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
