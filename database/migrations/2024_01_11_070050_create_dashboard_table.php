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
        Schema::create('dashboard', function (Blueprint $table) {
            $table->id();
            $table->integer('impressions');
            $table->integer('clicks');
            $table->integer('conversions');
            $table->double('ctr');
            $table->double('cr');
            $table->double('cpm');
            $table->double('cost'); 
            $table->double('cpa');
            $table->double('cpc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard');
    }
};
