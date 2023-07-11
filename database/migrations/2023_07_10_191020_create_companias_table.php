<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class createcompaniastable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('numero-soldados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('companias');
    }
};
