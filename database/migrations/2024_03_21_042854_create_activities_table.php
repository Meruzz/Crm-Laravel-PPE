<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('area_id')->constrained('action_areas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('activities');
    }
};
