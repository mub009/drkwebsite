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
        Schema::table('articles', function (Blueprint $table) {
            if (!Schema::hasColumn('articles', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('article_ar');
            }
            if (!Schema::hasColumn('articles', 'meta_title')) {
                $table->text('meta_title')->nullable()->after('meta_description');
            }
            if (!Schema::hasColumn('articles', 'keyword')) {
                $table->text('keyword')->nullable()->after('meta_title');
            }
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (Schema::hasColumn('articles', 'meta_description')) {
                $table->dropColumn('meta_description');
            }
            if (Schema::hasColumn('articles', 'meta_title')) {
                $table->dropColumn('meta_title');
            }
            if (Schema::hasColumn('articles', 'keyword')) {
                $table->dropColumn('keyword');
            }
        });
    }
};
