<?php

use App\Models\Flight;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('flight_id');
           $table->date('date');
           $table->integer('limit');
           $table->foreignId('airline_id')->references('airline_id')->on('airlines');
           
            $table->timestamps();
        });
        
        Flight::create(
            [
                'flight_id'=>1,
                'date'=>'2024-11-13',
                'limit'=>1,
                'airline_id'=>1
            ]
            );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
