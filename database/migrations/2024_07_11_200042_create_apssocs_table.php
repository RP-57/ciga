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
        Schema::create('apssocs', function (Blueprint $table) {
            $table->id();
            $table->string('cognome');
            $table->string('nome');
            $table->date('datanascita');
            $table->integer('capnascita');
            $table->string('comunenascita');
            $table->string('provincianascita');
            $table->integer('capresidenza');
            $table->string('indirizzoresidenza');
            $table->string('comuneresidenza');
            $table->string('provinciaresidenza');
            $table->string('telefono');
            $table->string('mail');
            $table->date('dataiscrizione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apssocs');
    }
};
