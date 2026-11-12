<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('ekstrakurikuler_id')
                  ->nullable()
                  ->constrained('ekstrakurikulers')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['ekstrakurikuler_id']);
            $table->dropColumn('ekstrakurikuler_id');
        });
    }
};
