<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('insurances')) {
            Schema::create('insurances', function (Blueprint $table) {
                $table->id();
                $table->string('insurance_en');
                $table->string('insurance_ar');
                $table->string('image')->nullable();
                $table->integer('sort')->default(0);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('insurances')) {
            Schema::drop('insurances');
        }
    }
};
