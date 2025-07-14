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
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'images')) {
                $table->json('images')->nullable()->after('image');
            }
            if (!Schema::hasColumn('products', 'specifications')) {
                $table->json('specifications')->nullable()->after('dimensions');
            }
            if (!Schema::hasColumn('products', 'meta_title')) {
                $table->string('meta_title', 60)->nullable()->after('specifications');
            }
            if (!Schema::hasColumn('products', 'meta_description')) {
                $table->string('meta_description', 160)->nullable()->after('meta_title');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['images', 'specifications', 'meta_title', 'meta_description']);
        });
    }
};
