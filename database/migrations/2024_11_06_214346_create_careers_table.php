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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->text('title');
            $table->string('description');
            $table->string('location');
            $table->integer('salary')->nullable();
            $table->enum('type', ['In person', 'Remote', 'Hybrid']);
            $table->enum('range', ['Permanent', 'Long term', 'Short term', 'Contract', 'Long term Contract', 'One time']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
