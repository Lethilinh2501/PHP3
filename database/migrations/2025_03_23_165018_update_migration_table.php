<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrate.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name', 250)->change();
            $table->string('vote', 20);
            $table->dropColumn(['view']);
            $table->renameColumn('price', 'product_price');
        });
    }

    /**
     * migrate:rollback | reset
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name', 250)->change();
            $table->dropColumn(['vote']);
            $table->integer('view');
            $table->renameColumn('product_price', 'price');
        });
    }
};
