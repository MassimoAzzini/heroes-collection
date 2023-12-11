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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 52)->unique();
            $table->text('description')->nullable();
            $table->tinyInteger('mod_for')->default(0);
            $table->tinyInteger('mod_des')->default(0);
            $table->tinyInteger('mod_cos')->default(0);
            $table->tinyInteger('mod_int')->default(0);
            $table->tinyInteger('mod_sag')->default(0);
            $table->tinyInteger('mod_car')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
