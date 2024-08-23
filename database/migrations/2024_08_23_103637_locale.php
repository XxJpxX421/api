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
        Schema::create('locales', function (Blueprint $table) {
            $table->id();
            $table->string("street");
            $table->string("district");
            $table->string("number", 10); // Número geralmente é curto, então limitamos a 10 caracteres
            $table->string("CEP", 8); // CEP no formato brasileiro tem 8 dígitos
            $table->string("city");
            $table->string("state", 2); // Assumindo que 'state' seja a sigla do estado com 2 caracteres
            $table->string("country");
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locales');
    }
};
