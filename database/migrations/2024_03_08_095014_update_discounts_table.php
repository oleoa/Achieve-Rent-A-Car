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
    Schema::table('discounts', function (Blueprint $table) {
      $table->string('text_mobile')->nullable()->after('text');
      $table->string('texto_mobile')->nullable()->after('texto');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('discounts', function (Blueprint $table) {
      $table->dropColumn('text_mobile');
      $table->dropColumn('texto_mobile');
    });
  }
};
