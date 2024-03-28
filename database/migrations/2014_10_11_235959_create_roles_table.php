<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name'); // Cambiado de enum a string
            $table->timestamps();
        });
        
=======
            $table->enum('name', ['Administrador', 'Docente', 'Estudiante']);
            $table->timestamps();
        });

>>>>>>> c9512cf9017c6b6444a92b0d0d8815491b1c9659
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
