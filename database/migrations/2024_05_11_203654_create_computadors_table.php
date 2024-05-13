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
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->String('codigo');  
            $table->String('serie');         
            $table->foreignId('marcas_id')->nullable()->constrained('marcas')->onUpdate('cascade')->onDelete('set null');            
            $table->String('cpu');
            $table->String('ram');
            $table->foreignId('sistemas_id')->nullable()->constrained('sistemas')->onUpdate('cascade')->onDelete('set null');
            $table->String('macaddress');
            $table->String('ip');          
            $table->foreignId('funcionarios_id')->nullable()->constrained('funcionarios')->onUpdate('cascade')->onDelete('set null');     
            $table->foreignId('telefonos_id')->nullable()->constrained('telefonos')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('impresoras_id')->nullable()->constrained('impresoras')->onUpdate('cascade')->onDelete('set null'); 
            $table->foreignId('monitors_id')->nullable()->constrained('monitors')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('trabajos_id')->nullable()->constrained('trabajos')->onUpdate('cascade')->onDelete('set null'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadors');
    }
};
