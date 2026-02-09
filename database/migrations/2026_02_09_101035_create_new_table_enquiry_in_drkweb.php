<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enquiry')) {
            Schema::create('enquiry', function (Blueprint $table) {
                $table->id('enquiryId');
                $table->string('name');
                $table->string('phone');
                $table->string('branch');
                $table->string('email');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('enquiry')) {
            Schema::drop('enquiry');
        }
    }
};
