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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("age");
            $table->decimal("height", 5, 2); // 5 dígitos no total, 2 após o ponto decimal (exemplo: 180.50)
            $table->decimal("weight", 5, 2); // 5 dígitos no total, 2 após o ponto decimal (exemplo: 75.50)
            $table->string("CPF")->unique(); // CPF único na tabela
            $table->string("RG")->unique();  // RG único na tabela
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
