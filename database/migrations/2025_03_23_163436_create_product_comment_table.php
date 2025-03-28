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
        Schema::create('product_comment', function (Blueprint $table) {
            $table->increments('id'); // tự hiểu int | unsigned | primary key | AI (auto...)
            $table->unsignedInteger('userId');
            $table->foreign('userId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // gán khóa ngoại

            $table->unsignedInteger('productId');
            $table->foreign('productId')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->string('comment', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comment');
    }
};
