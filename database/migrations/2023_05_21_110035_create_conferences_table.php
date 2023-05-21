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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // pridėtas name stulpelis
            $table->text('description'); // pridėtas description stulpelis
            $table->date('date_start'); // pridėtas date_start stulpelis
            $table->date('date_end');// pridėtas date_end stulpelis
            $table->text('location');// pridėtas date_end stulpelis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
