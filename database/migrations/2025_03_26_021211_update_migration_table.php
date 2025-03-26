<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name', 250)->change(); // Đảm bảo đã cài doctrine/dbal
            $table->string('vote', 20)->nullable(); // Thêm cột vote
            $table->dropColumn('view'); // Xóa cột view
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->unsignedInteger('user_id'); // Đảm bảo cùng kiểu dữ liệu với users.id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('student_id')->after('id'); // Thêm student_id
            $table->string('phone', 10)->unique()->after('email'); // Thêm phone, đảm bảo unique
        });

    }

    /**
     * Rollback the migration.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name', 200)->change(); // Đưa name về cũ
            $table->dropColumn('vote'); // Xóa cột vote
            $table->integer('view')->after('name'); // Thêm lại cột view
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['student_id']); // Xóa ràng buộc khóa ngoại
            $table->dropColumn('student_id'); // Xóa cột student_id
            $table->dropColumn('phone'); // Xóa cột phone
        });

    }
};
