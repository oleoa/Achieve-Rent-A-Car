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
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->string('email')->unique();
      $table->boolean('setted_up')->default(false);
      $table->boolean('admin')->default(false);
      $table->string('password')->nullable();
      $table->string('verification_token')->nullable();
      $table->string('password_verification_token')->nullable();
      $table->string('api_token', 80)->unique()->nullable()->default(null);
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
