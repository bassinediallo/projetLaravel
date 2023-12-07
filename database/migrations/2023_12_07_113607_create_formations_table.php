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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Utilisez une seule colonne pour stocker le nom de la formation
            $table->timestamps();
        });

        // Insérez des données de formation initiales
        DB::table('formations')->insert([
            ['nom' => 'INFORMATIQUE'],
            ['nom' => 'COMPTABILITE'],
            ['nom' => 'MEDECINE'],
            ['nom' => 'DROIT'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
