<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Administrador', 'Docente', 'Estudiante']);
            $table->timestamps();
        });

        // Insertar roles iniciales
        DB::table('roles')->insert([
            ['name' => 'Administrador'],
            ['name' => 'Docente'],
            ['name' => 'Estudiante'],
        ]);
    }

    public function down(): void {
        Schema::dropIfExists('roles');
    }
};
