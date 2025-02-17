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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('name');
            $table->string('photo');
            $table->string('place_of_birth');
            $table->text('address');
            $table->string('date_of_birth');
            $table->enum('gender', ['L', 'P']);
            $table->string('religion');
            $table->string('phone');
            $table->string('npwp');
            $table->foreignId('unit_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('position_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
