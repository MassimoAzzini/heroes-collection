<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 52)->unique();
            $table->decimal('height', 5,2)->nullable();
            $table->decimal('weight', 6,2)->nullable();
            $table->longText('background')->nullable();
            $table->string('image', 100)->nullable();
            $table->tinyInteger('armor_class')->unsigned();
            $table->tinyInteger('strength')->unsigned();
            $table->tinyInteger('dexterity')->unsigned();
            $table->tinyInteger('constitution')->unsigned();
            $table->tinyInteger('intelligence')->unsigned();
            $table->tinyInteger('wisdom')->unsigned();
            $table->tinyInteger('charism')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
