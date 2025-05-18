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
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }

        //Important Migration Command

    // Create Migration:                php artisan make:migration create_users_table
    // Run All Migrations:              php artisan migrate
    // Rollback Last Migration Batch:   php artisan migrate:rollback
    // Rollback All Migrations:         php artisan migrate:reset
    // Refresh All Migrations:          php artisan migrate:refresh
    // Refresh and Reseed:              php artisan migrate:refresh --seed
    // Drop All Tables and Migrate:     php artisan migrate:fresh
    // Add Column with New Migration:   php artisan make:migration add_email_to_users_table --table=users
    // Specify Migration Path:          php artisan migrate --path=/database/migrations/2024_01_01_create_custom_table.php
    // Run Specific Migration:          php artisan migrate --path=/database/migrations/filename.php


};
