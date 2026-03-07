<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('offers', 'active')) {

            Schema::table('offers', function (Blueprint $table) {
                $table->renameColumn('active', 'with_carousel');
            });

            Schema::table('offers', function (Blueprint $table) {
                $table->boolean('with_carousel')->nullable()->default(1)->change();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('offers', 'with_carousel')) {

            // Replace NULL values first
            DB::table('offers')
                ->whereNull('with_carousel')
                ->update(['with_carousel' => 0]);

            Schema::table('offers', function (Blueprint $table) {
                $table->renameColumn('with_carousel', 'active');
            });

            Schema::table('offers', function (Blueprint $table) {
                $table->boolean('active')->nullable(false)->change();
            });
        }
    }
};
