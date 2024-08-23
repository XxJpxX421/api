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
        Schema::create('competitors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("age");
            $table->decimal("height", 5, 2); // Ex: 1.80
            $table->decimal("weight", 5, 2); // Ex: 75.50
            $table->string("gender")->nullable(); // Opcional, pode ser string
            $table->string("CPF")->unique(); // CPF deve ser único
            $table->string("RG")->unique();  // RG deve ser único
            $table->string("team")->nullable(); // Campo team como string
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitors');
    }
};
