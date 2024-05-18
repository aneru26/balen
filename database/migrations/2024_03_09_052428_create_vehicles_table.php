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
       
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id("vehicle_id");
            $table->string("vin");
            $table->unsignedBigInteger("mymodel_id");
            $table->unsignedBigInteger("dealer_id");
            $table->integer("price");
            $table->string("image");
            $table->timestamps();
            $table->foreign("mymodel_id")->references("mymodel_id")->on('mymodels')->onDelete('cascade');
            $table->foreign("dealer_id")->references("id")->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
