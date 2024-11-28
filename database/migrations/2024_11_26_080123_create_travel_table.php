<?php

use App\Models\Travel;
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
        Schema::create('travel', function (Blueprint $table) {
            $table->primary(['flight_id', 'user_id']);
            $table->foreignId('flight_id')->refernces('flight_id')->on('flights');
            $table->foreignId('user_id')->refernces('id')->on('users');
            $table->longText('evaloution',50);
            
            
           
            $table->timestamps();
        });

        Travel::create(
            [
                'evaloution'=>'tesztEgy',
                'user_id'=>1,
                'flight_id'=>1
            ]
            );
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
