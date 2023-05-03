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
        Schema::create('locations', function (Blueprint $table) {
            $table->id(); // auto increment primary key
            $table->string('name'); // varchar(255)
            $table->integer('cap'); // integer 
            $table->float('reviews', 8, 2); // create a float column with 8 digits in total and 2 digits after the decimal point
            $table->boolean('is_open'); // boolean column
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
