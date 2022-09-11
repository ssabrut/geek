<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('books', function (Blueprint $table) {
            $table->text('description')->after('slug');
            $table->integer('rating')->after('image_url')->default(0);
            $table->integer('price')->after('rating');
            $table->integer('pages')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('description');
            $table->dropColumn('rating');
            $table->dropColumn('price');
            $table->dropColumn('pages');
        });
    }
};
