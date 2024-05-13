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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
            $table->String('anexo');                        
            $table->foreignId('marcas_id')->nullable()->constrained('marcas')->onUpdate('cascade')->onDelete('set null');           
            $table->String('modelo')->nullable();
            $table->enum('tipo',['ANÁLOGO', 'IP']);
            $table->String('macaddress')->nullable();
            $table->String('ip')->nullable();
            $table->String('serie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefonos');
    }
};
