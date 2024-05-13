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
        Schema::create('reservacion', function (Blueprint $table) {
            $table->bigIncrements('idreservacion');
            $table->unsignedBigInteger('idhabitacion');
            $table->unsignedBigInteger('idcliente');
            $table->foreign('idhabitacion')->references('idhabitacion')
            ->on('habitacion')->onUpdate('cascade')->noActionOnDelete();
            $table->foreign('idcliente')->references('idcliente')->on('cliente')
            ->onUpdate('cascade')->noActionOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservacions');
    }
};
