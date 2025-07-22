<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('meta_title', 60)->nullable()->after('comments_count');
            $table->string('meta_description', 160)->nullable()->after('meta_title');
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description']);
        });
    }
}; 